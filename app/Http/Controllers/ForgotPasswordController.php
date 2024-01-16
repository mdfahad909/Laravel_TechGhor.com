<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswoedForm()
    {
        return view('admin.auth.forgotPassword');
    }

    public function submitForgotPasswordForm(Request $request)
    {
        $request->validate([
            'email'=> 'required|email|exists:users'
        ]);

        $token= Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' =>$token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('admin.auth.email.emailTemplate', ['token' =>$token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'we have sent e-mail your password reset link!');

    }

    public function showResetPasswordForm($token)
    {
        return view('admin.auth.forgotPasswordLink', ['token' =>$token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
        $updatePassword = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();

        if (!$updatePassword)
        {
            return back()->withInput()->with('error', 'Invalid token!');
        }
        $user = User::where('email', $request-> email)->update(['password' => Hash::make($request->password)]);

        $updatePassword->delete();
        return redirect('/login')->with('message', 'Your Password has been changed!');
    }



    public function changePassword()
    {
       return view('admin.auth.changePasswordLink');
    }

    public function updatePassword(Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password))
        {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('/login')->with("message", "Password changed successfully!");
}
   

    
}

<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [ViewController::class, 'index'])->name('/');
Route::get('/about', [ViewController::class, 'about'])->name('view_about');

Route::get('/blog', [ViewController::class, 'blog'])->name('blog');

Route::get('/blog-details', [ViewController::class, 'blogDetails'])->name('blogDetails');

Route::get('/blog-show', [ViewController::class, 'blog_show_div'])->name('blog_show_div');

Route::get('/dashboard', function () {
    return view('admin.dashboard.dashbord');
})->name('dashboard')->middleware('auth');



Route::prefix('admin')->middleware('auth')->group(function () {
    // Services List Data Route
    Route::post('service/list_data', [ServiceController::class, 'list_data'])->name('service.list_data');
    // Services List Route
    Route::get('service/list', [ServiceController::class, 'list'])->name('service_list');


    // testimonail List Data Route
    Route::post('testimonial/list_data', [TestimonialController::class, 'list_data'])->name('testimonial.list_data');
    // testimonail List Route
    Route::get('testimonial/list', [TestimonialController::class, 'list'])->name('testimonial_list');

    // post List Data Route
    Route::post('post/list_data', [PostController::class, 'list_data'])->name('post.list_data');

    Route::post('ckeditor/upload', [PostController::class, 'upload'])->name('ckeditor.upload');





    // post List Route
    Route::get('post/list', [PostController::class, 'list'])->name('post_list');


    // testimonail List Data Route
    Route::post('team/list_data', [OurTeamController::class, 'list_data'])->name('team.list_data');
    // testimonail List Route
    Route::get('team/list', [OurTeamController::class, 'list'])->name('team_list');

    // category List Data Route
    Route::post('category/list_data', [CategoryController::class, 'list_data'])->name('category.list_data');
    // category List Route
    Route::get('category/list', [CategoryController::class, 'list'])->name('category_list');

    // thi is team route
    Route::resource('team', OurTeamController::class);
    // thi is testimonial route
    Route::resource('testimonial', TestimonialController::class);
    // service resource
    Route::resource('service', ServiceController::class);
    // informatin resource
    Route::resource('information', InformationController::class);
});


Route::get('/login', function () {
    return view('admin.auth.login');
});


Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');




Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('storeregister');
Route::get('account/verify/{token}', [RegisterController::class, 'verifyAccount'])->name('user.verify');



// tis route forgotpassword form show
Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswoedForm'])->name('forgot.password.get');
// end
// tis route forgotpassword form insert in to database
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('forgot.password.post');
// tis route resetpassword form  
Route::get('reset-password/{token}', [
    ForgotPasswordController::class,
    'showResetPasswordForm'
])->name('reset.password.get');
// tis route submite and update password 
Route::post('reset-password', [
    ForgotPasswordController::class,
    'submitResetPasswordForm'
])->name('reset.password.post');



Route::get('/change-password', [ForgotPasswordController::class, 'changePassword'])->name('change-password');

Route::post('/change-password', [ForgotPasswordController::class, 'updatePassword'])->name('update-password');



Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
});







































// Route::get('changePassword', [ForgotPasswordController::class, 'changePassword'])->name('changePassword');
// Route::post('change-password', [ForgotPasswordController::class, 'changePasswordMatch'])->name('changePassword.post');


// Route::get('/change-password-link', function () {
//     return view('admin.auth.changePasswordLink');
// });
// Route::post('submit-new-password', [ForgotPasswordController::class, 'changePasswordsubmit'])->name('submit.newpassword.post');

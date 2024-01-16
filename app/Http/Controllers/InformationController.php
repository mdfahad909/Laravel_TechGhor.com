<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Information $information)
    {
        $information = $information->first();
        return view('admin.information.index', compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Information $information)
    {
        $information->phone = $request->phone;
        $information->email = $request->email;
        $information->facebook = $request->facebook;
        $information->instagram = $request->instagram;
        $information->twitter = $request->twitter;
        $information->linkedin = $request->linkedin;
        $information->pinterest = $request->pinterest;
        $information->location = $request->location;
        $information->office_time = $request->office_time;
        $information->map = $request->map;
        $information->happy_client = $request->happy_client;
        $information->company = $request->company;
        $information->project_done = $request->project_done;

        $information->saveOrFail();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {
        $information->phone = $request->phone;
        $information->email = $request->email;
        $information->facebook = $request->facebook;
        $information->instagram = $request->instagram;
        $information->twitter = $request->twitter;
        $information->linkedin = $request->linkedin;
        $information->pinterest = $request->pinterest;
        $information->location = $request->location;
        $information->office_time = $request->office_time;
        $information->map = $request->map;
        $information->happy_client = $request->happy_client;
        $information->company = $request->company;
        $information->project_done = $request->project_done;

        $information->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        //
    }
}

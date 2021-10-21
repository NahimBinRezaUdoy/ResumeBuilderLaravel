<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userDetail = auth()->user()->userDetail;

        return view('userDetails.index', compact('userDetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'fullname' => 'required',
            'bio' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ]);


        $user = new UserDetail();

        $user->user_id = auth()->user()->id;
        $user->fullname = $request->fullname;
        $user->bio = $request->bio;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        $user->save();

        return redirect()->route('userDetails.index')->with('message', 'User Details Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetail $userDetail)
    {
        return view('userDetails.edit', compact('userDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'bio' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ]);

        $userDetail->update($request->all());

        return redirect()->route('userDetails.index')->with('message', 'UserDeatils Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function delete(UserDetail $userDetail)
    {
        $userDetail->delete();
        return redirect()->route('userDetails.index')->with('message', 'UserDeatils Deleted Successfully');
    }
}

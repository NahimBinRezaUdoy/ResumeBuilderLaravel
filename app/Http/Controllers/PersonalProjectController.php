<?php

namespace App\Http\Controllers;

use App\Models\PersonalProject;
use Illuminate\Http\Request;

class PersonalProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalProject = auth()->user()->personalProject;
        return view('personalProject.index', compact('personalProject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personalProject.create');
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
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        auth()->user()->personalProject()->create($data);

        return redirect()->route('personalProject.index')->with('message', 'Your Project Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalProject  $personalProject
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalProject $personalProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalProject  $personalProject
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalProject $personalProject)
    {
        return view('personalProject.edit', compact('personalProject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalProject  $personalProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalProject $personalProject)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $personalProject->update($data);

        return redirect()->route('personalProject.index')->with('message', 'Your Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalProject  $personalProject
     * @return \Illuminate\Http\Response
     */
    public function delete(PersonalProject $personalProject)
    {
        $personalProject->delete();

        return redirect()->route('personalProject.index')->with('message', 'Your Project Deleted Successfully');
    }
}

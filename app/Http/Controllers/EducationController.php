<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education = auth()->user()->education;
        return view('education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'sector_name' => 'required',
            'sector_location' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_end_date' => 'required',
        ]);



        // $education = new Education();

        // $education->user_id = auth()->user()->id;
        // $education->sector_name = $request->sector_name;
        // $education->sector_location = $request->sector_location;
        // $education->degree = $request->degree;
        // $education->field_of_study = $request->field_of_study;
        // $education->graduation_start_date = $request->graduation_start_date;
        // $education->graduation_end_date = $request->graduation_end_date;

        // $education->save();

        auth()->user()->education()->create($request->all());

        return redirect()->back()->with('message', 'Education Details Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $this->validate($request, [
            'sector_name' => 'required',
            'sector_location' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_end_date' => 'required',
        ]);

        $education->update($request->all());

        return redirect()->route('education.index')->with('message', 'Education Details Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function delete(Education $education)
    {
        $education->delete();

        return redirect()->route('education.index')->with('message', 'Education Details Delete Successfully');
    }
}

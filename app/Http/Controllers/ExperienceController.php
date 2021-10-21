<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experience = auth()->user()->experiences;
        return view('experience.index', compact('experience'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experience.create');
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
            'company_name' => 'required',
            'job_title' => 'required',
            'achievement' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);



        auth()->user()->experiences()->create($data);

        return redirect()->route('experience.index')->with('message', 'Your Experience Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        return view('experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        $data = $this->validate($request, [
            'company_name' => 'required',
            'job_title' => 'required',
            'achievement' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $experience->update($data);

        return redirect()->route('experience.index')->with('message', 'Your Experience Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function delete(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('experience.index')->with('message', 'Your Experience Deleted Successfully');
    }
}

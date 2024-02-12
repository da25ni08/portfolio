<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Http\Requests\StoreExperienceRequest;
use App\Http\Requests\UpdateExperienceRequest;
use App\Models\Employment;
use App\Models\Skill;
use App\Models\Study;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudios = Study::all();
        foreach ($estudios as $key => $estudio) {
            $estudio = Experience::find($estudio->experience_id);
        }
        $trabajos = Employment::all();
        foreach ($trabajos as $key => $trabajo) {
            $trabajo = Experience::find($trabajo->experience_id);
        }
        $skills = Skill::all();
        return view('estudios', ['estudios' => $estudios, 'trabajos' => $trabajos, 'skills' => $skills]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExperienceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExperienceRequest $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        //
    }
}

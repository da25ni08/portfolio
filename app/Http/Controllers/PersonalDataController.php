<?php

namespace App\Http\Controllers;

use App\Models\PersonalData;
use App\Models\Skill;
use Illuminate\Http\Request;

class PersonalDataController extends Controller
{
    public function index()
    {
        $datos_personales = PersonalData::find(1);
        $skills = Skill::all();
        return view('home', ['datos_personales' => $datos_personales, 'skills' => $skills]);
    }

    public function contact() {
        return view('contact');
    }
}

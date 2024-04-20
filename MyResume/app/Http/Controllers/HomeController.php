<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\EducationLevel;
use App\Models\Experience;
use App\Models\ProfileData;
use App\Models\Skill;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profile_data = ProfileData::first();

        $awards=Award::all()->sortDesc();

        $experiences=Experience::all()->sortDesc();

        $education_levels=EducationLevel::all()->sortDesc();

        $skills=Skill::all()->sortDesc();

        $works=Work::all()->sortDesc();

        return view('welcome',compact(
            'profile_data',
            'awards',
            'experiences',
            'education_levels',
            'skills',
            'works'
        ));
    }
}

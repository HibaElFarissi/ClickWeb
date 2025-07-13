<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\SkillsType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
         $Skills=Skill::latest()->get();
        $Skill_item = SkillsType::with('skill')->get();
        return view('pages.Home',compact('Skills', 'Skill_item'));
    }
}

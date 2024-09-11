<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index ()
    {
     $data = [
        'skill' => Skill::limit(4)->get(),
        'project' => Project::limit(4)->get(),
        'content' => 'home/home/index'
        ];
        return view('home.layouts.wrapper', $data);
    }

     function skill ()
    {
     $data = [
        'skill' => Skill::get(),
        'content' => 'home/skills/index'
        ];
        return view('home.layouts.wrapper', $data);
    }

    function project ()
    {
     $data = [

        'project' => Project::get(),
        'content' => 'home/project/index'
        ];
        return view('home.layouts.wrapper', $data);
    }

}

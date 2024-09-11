<?php

namespace App\Http\Controllers;

use App\Models\Message; // Pastikan ini adalah nama model yang benar
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $data = [
            'message' => Message::count(), // Perbaiki penamaan kelas di sini
            'project' => Project::count(),
            'skill' => Skill::count(),
            'user' => User::count(),
            'content' => 'admin/dashboard/index'
        ];

        return view('admin.layouts.wrapper', $data);
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Projects extends Controller
{
    public function projects()
    {
        return view("projects");
    }
}

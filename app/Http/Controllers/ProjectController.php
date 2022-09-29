<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show()
    {
        $title = "Projecten";
        $text = "Projecten door meerdere gebruikers";
        return view('projects', compact('title','text'));
    }
}

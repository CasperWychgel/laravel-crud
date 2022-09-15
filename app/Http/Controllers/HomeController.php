<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $title = "Dit is een site";
        $text = "lorem ipsum dolor";
        return view('home', compact('title','text'));
    }
}

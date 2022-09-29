<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $title = "Gebruiker overzicht";
        $text = "U dient ingelogd te zijn om dit te zien.";
        return view('user', compact('title','text'));
    }
}

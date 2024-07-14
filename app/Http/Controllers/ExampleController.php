<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    function login() {
        return view('login');
    }

    function cv() {
        // logic
        return view('cv');
    }
}

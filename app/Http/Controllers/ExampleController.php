<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function login() {
        return view('login');
    }

    public function receive(Request $request) {
        dd($request->all());
        // print_r($request->input());
    }

    function cv() {
        
        return view('cv');
    }
}

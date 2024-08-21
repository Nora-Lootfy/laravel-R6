<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    public function login() {
        session()->put('test', 'First Laravel session');
        dd(session('test'));
        return view('login');
    }

    public function receive(Request $request) {
        dd($request->all());
        // print_r($request->input());
    }

    function cv() {
        
        return view('cv');
    }

    function uploadForm() {
        return view('upload');
    }

    public function upload(Request $request){
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/images';
        $request->image->move($path, $file_name);
        
        return 'Uploaded';
    }


    public function index() {

        return view('index');
    }

    public function about() {

        return view('about');
    }

    public function test() {
        // dd(Student::find(1)?->phone->phone_number);
        dd(session('test'));

        dd(
            DB::table('students')
            ->join('phones', 'phones.id', '=', 'students.phone_id')
            ->where('students.id', '=', 1)
            ->first()
        );
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all cars from database
        // return view all cars, cars data
        // select * from cars;
        $cars = Car::get();

        return view('cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_car');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Car::create([
            // 'k' => 'v'
            'carTitle' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'published' => isset($request->published),
        ]);

        return "Data added successfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // get data of car to be updated
        // select 
        $car = Car::findOrFail($id);
        return view('edit_car', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request ==> data to be updated
        // $id 

        $data = [
            'carTitle' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'published' => isset($request->published),
        ];

        Car::where('id', $id)->update($data);

        return "data updated successfully";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'delete page';
    }
}

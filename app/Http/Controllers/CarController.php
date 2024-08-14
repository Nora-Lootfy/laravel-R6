<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\Common;

class CarController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all cars from database
        // return view all cars, cars data
        // select * from cars;
        $cars = Car::with('category')->get();

        // dd($cars);

        return view('cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id', 'category_name')->get();
        return view('add_car', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  logic to upload image in public/assets/images
        // dd($request->all());

        $data = $request->validate([
            'carTitle' => 'required|string',
            'description' => 'required|string|max:1000',
            'price' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'published' => 'boolean',
            'category_id' => 'required|exists:categories,id',
        ]);


        $data['image'] = $this->uploadFile($request->image, 'assets/images/cars');

        Car::create($data);
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $car = Car::findOrFail($id)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // get data of car to be updated
        // select
        $categories = Category::select('id', 'category_name')->get();
        $car = Car::findOrFail($id);
        return view('edit_car', compact('car', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request ==> data to be updated
        // $id

        $data = $request->validate([
            'carTitle' => 'required|string',
            'description' => 'required|string|max:1000',
            'price' => 'required',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets/images/cars');
        }

        $data['published'] = isset($request->published);

        Car::where('id', $id)->update($data);

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        // softDelete
        Car::where('id', $id)->delete();
        return redirect()->route('cars.index');
    }

    public function showDeleted()
    {
        $cars = Car::onlyTrashed()->get();

        return view('trashedCars', compact('cars'));
    }

    public function restore(string $id)
    {
        Car::where('id', $id)->restore();
        return redirect()->route('cars.showDeleted');
    }

    public function forceDelete(string $id)
    {
        Car::where('id', $id)->forceDelete();
        return redirect()->route('cars.index');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::orderBy('id', 'asc')->paginate(5);
        return view('pages.car',['models'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create.car-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'brand' => 'required|max:255',
            'model' => 'required|max:255',

        ]);
        $data = $request->all();

        Car::create($data);
        return redirect('/cars')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('pages.show.car-show',['car'=>$car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('pages.update.car-update',['car'=>$car]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'name' => 'required|max:255',
            'brand' => 'required|max:255',
            'model' => 'required|max:255',

        ]);
        $data = $request->all();

        $car->update($data);
        return redirect('/cars')->with('warning', 'Ma\'lumot yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/cars')->with('danger', 'Ma\'lumot o\'chirildi!');
    }
}

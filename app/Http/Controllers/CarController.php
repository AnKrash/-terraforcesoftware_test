<?php

namespace App\Http\Controllers;

use App\Models\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::simplePaginate(100);

        return view('car/index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('car/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cars|max:255'
        ]);
        $car = new Car();
        $car->name = $request->input('name');
        $car->save();

        return redirect()->route('cars.index')->with('success', 'Car created!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);

        return view('car/show', ["car" => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $car = Car::find($id);

        return view('car/edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->name = $request->input('name');
        $car->save();

        return redirect()->route('cars.index')->with('success', 'Car was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Car::find($id)->delete();

        return redirect()->route('cars.index')->with('success', 'Car was destroyed!');
    }
}

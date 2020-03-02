<?php

namespace App\Http\Controllers;

use App\Meals;
use Illuminate\Http\Request;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('meals.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'category'=>'required',
            'image'=>'required'
        ]);

        $meal = new Meals([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'origin_country' => $request->get('origin_country'),
            'category' => $request->get('category'),
            'image' => $request->get('image')
        ]);

        $meal->save();
        return redirect('/')->with('success', 'Contact saved!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function show(Meals $meals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function edit(Meals $meals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meals $meals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meals $meals)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Modele;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Modele::all()->toArray();
        return array_reverse($models);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['plaque'=>'required', 'mark'=>'required|unique:modeles']);
        Modele::create($request->all());
        return response()->json('model created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modele  $model
     * @return \Illuminate\Http\Response
     */
    public function show(Modele $model)
    {
        return response()->json($model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modele  $model
     * @return \Illuminate\Http\Response
     */
    public function edit(Modele $model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modele  $model
     * @return \Illuminate\Http\Response
     */
    public function update( Modele $model, Request $request)
    {
        $request->validate(['plaque'=>'required', 'mark'=>'required|unique:modeles']);
        $model->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modele  $model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modele $model)
    {
        $model->delete();
        return response()->json('Modele deleted');
    }
}

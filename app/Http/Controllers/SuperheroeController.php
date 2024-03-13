<?php

namespace App\Http\Controllers;

use App\Superheroe;
use Illuminate\Http\Request;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $superheroes = Superheroe::all();
        return view('superheroe.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superheroe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_heroe' => 'required|max:75',
            'nombre_real' => 'required|max:75',
            'foto' => 'required|max:75',
            'info' => 'required',
        ]);
        Superheroe::create($validatedData);

        return redirect('/superheroe')->with('sucess', 'Se ha registrado al superheroe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Superheroe  $superheroe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroe.show', compact('superheroe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Superheroe  $superheroe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroe.edit', compact('superheroe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Superheroe  $superheroe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre_heroe' => 'required|max:75',
            'nombre_real' => 'required|max:75',
            'foto' => 'required|max:75',
            'info' => 'required',
        ]);
        Superheroe::whereId($id)->update($validatedData);
        return redirect('/superheroe')->with('sucess', 'Se ha actualizado el registro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Superheroe  $superheroe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        $superheroe->delete();
        return redirect('/superheroe')->with('success', 'Se elimino el superheroe');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstudianteModel;

use App\Models\User;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = EstudianteModel::select('*')->get();
        return view('estudiantes.index',compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estudiantes = EstudianteModel::get();
        return view('estudiantes.create', compact('estudiantes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estudiantes = EstudianteModel::where('Id_Estudiante',$id)->firstOrFail();
        return view('estudiantes.show', compact('estudiantes'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

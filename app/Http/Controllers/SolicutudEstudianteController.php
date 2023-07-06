<?php

namespace App\Http\Controllers;
use App\Models\SolicutudEstudianteModel;
use App\Models\solicitudOrgModel;
use App\Models\oportunidadModel;
use Illuminate\Http\Request;

class SolicutudEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oportunidades = oportunidadModel::select('*')->get();
        $solicitudOrgs = solicitudOrgModel::select('*')->where('Estatus', 'aceptada')->get();
        $SolicitudesEstudiantes = SolicutudEstudianteModel::select('*')->get();
        return view('solicitudes.index',compact('SolicitudesEstudiantes','solicitudOrgs','oportunidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $oportunidades = oportunidadModel::select('*')->get();
        $solicitudOrgs = solicitudOrgModel::select('*')->where('Estatus', 'aceptada')->where('Id_OportunidadValidador', $id)->firstOrFail();
        $SolicitudesEstudiantes = SolicutudEstudianteModel::select('*')->get();
        return view('solicitudes.show',compact('SolicitudesEstudiantes','solicitudOrgs','oportunidades'));
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

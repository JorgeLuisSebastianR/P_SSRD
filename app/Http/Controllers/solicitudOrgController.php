<?php

namespace App\Http\Controllers;
use App\Models\solicitudOrgModel;
use App\Models\oportunidadValidadorModel; // Asegúrate de importar el modelo correcto
use App\Models\oportunidadModel;
use App\Models\UserModel;

use Illuminate\Http\Request;

class solicitudOrgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oportunidades = oportunidadModel::select('*')->get();
        $solicitudOrgs = solicitudOrgModel::select('*')->get();
        $users = UserModel::select('*')->get();
        return view('solicitudOrgs.index',compact('solicitudOrgs','oportunidades','users'));
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
        $user = UserModel::select('*')->get();
        $solicitudOrg = new solicitudOrgModel(); // Usa el modelo correcto
        $solicitudOrg = $this->crearActualizar($request, $solicitudOrg);
        return redirect()->route('oportunidades.index')->with('message','Se ha cargado correctamente');
    }

    public function crearActualizar(Request $request, $solicitudOrg){
        $solicitudOrg->Id_Oportunidad = $request->Id_Oportunidad;
        $solicitudOrg->Id_Validador = $request->Id_Validador; 
        $solicitudOrg->fechaRevicio = $request->fechaRevicio;
        $solicitudOrg->Estatus = $request->Estatus;
        $solicitudOrg->save();
        return $solicitudOrg;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $oportunidad = oportunidadModel::where('Id_Oportunidad', $id)->firstOrFail();
        return view('solicitudOrgs.show', compact('oportunidad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
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

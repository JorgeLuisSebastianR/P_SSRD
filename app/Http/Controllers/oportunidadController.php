<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\oportunidadModel;
use Barryvdh\DomPDF\facade;
use PDF;
use Illuminate\Support\Facades\Auth;
class oportunidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $oportunidades = oportunidadModel::select('*')->get();
        return view('oportunidades.index', compact('oportunidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$productos = ProductoModel::get();
        return view('oportunidades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $oportunidad = new oportunidadModel();
        $oportunidad =$this->crearActualizar($request, $oportunidad);
        return redirect()->route('oportunidades.index')->with('message','Se ha cargado correctamente');
    }

    public function crearActualizar(Request $request, $oportunidad){
        $oportunidad->Id_Empresa=           $request->Id_Empresa;
        $oportunidad->nombreProyecto=       $request->nombreProyecto; 
        $oportunidad->Descripcion=          $request->Descripcion;
        $oportunidad->Requisitos=           $request->Requisitos;
        $oportunidad->Tipo=                 $request->Tipo;
        $oportunidad->fechaInicio=          $request->fechaInicio;
        $oportunidad->fechaFin=             $request->fechaFin;
        $oportunidad->save();
        return $oportunidad;
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $oportunidad = oportunidadModel::where('Id_Oportunidad',$id)->firstOrFail();
        return view('oportunidades.show', compact('oportunidad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $oportunidad = oportunidadModel::where('Id_Oportunidad',$id)->firstOrFail();
        return view('oportunidades.edit', compact('oportunidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $oportunidad = oportunidadModel::where('Id_Oportunidad',$id)->firstOrFail();
        $oportunidad =$this->crearActualizar($request, $oportunidad);
        return redirect()->route('oportunidades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $oportunidad = oportunidadModel::where('Id_Oportunidad',$id)->firstOrFail();
        try{
            $oportunidad->delete();
            return redirect()->route('oportunidades.index')->with('message','borrado');
            
        }catch(QueryException $e){
            return redirect()->route('oportunidades.index')->with('message','Aaaaaa');
        }  
    }

public function exportPDF(){
    $oportunidades = oportunidadModel::all();
    $pdf = PDF ::loadView('oportunidades.exportPDF', compact('oportunidades'));
    $pdf->setPaper('a4'. 'landscape');
    return $pdf->stream();
    }
}
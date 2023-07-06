<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomSolicitudEmpresa;

class CustomSolicitudEmpresaController extends Controller
{
    public function index()
    {
        $solicitudes = CustomSolicitudEmpresa::with('solicitud', 'empresa')->get();
        return view('solicitudes.index', compact('solicitudes'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpresaModel;
use Barryvdh\DomPDF\facade;
use PDF;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EmpresaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $empresas = $user->empresas;
        return view('empresas.index', compact('empresas'));
    }

    public function create()
    {
        $users = User::where('id', Auth::id())->get();
        return view('empresas.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Sector' => 'required',
            'Ubicacion' => 'required',
            'Descripcion' => 'required',
            'id' => 'required',
        ]);

        $user = Auth::user();
        $empresa = new EmpresaModel([
            'Nombre' => $request->input('Nombre'),
            'Sector' => $request->input('Sector'),
            'Ubicacion' => $request->input('Ubicacion'),
            'Descripcion' => $request->input('Descripcion'),
        ]);
        $user->empresas()->save($empresa);

        return redirect()->route('empresas.index')->with('message', 'Empresa creada correctamente');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $empresa = $user->empresas()->findOrFail($id);
        $users = User::where('id', Auth::id())->get();
        return view('empresas.edit', compact('empresa', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nombre' => 'required',
            'Sector' => 'required',
            'Ubicacion' => 'required',
            'Descripcion' => 'required',
            'id' => 'required',
        ]);

        $user = Auth::user();
        $empresa = $user->empresas()->findOrFail($id);
        $empresa->update($request->all());

        return redirect()->route('empresas.index')->with('message', 'Empresa actualizada correctamente');
    }

    public function destroy($id)
    {
        $user = Auth::user();
        $empresa = $user->empresas()->findOrFail($id);
        $empresa->delete();

        return redirect()->route('empresas.index')->with('message', 'Empresa eliminada correctamente');
    }
    public function exportPDF(){
        $empresas = EmpresaModel::all();
        $pdf = PDF ::loadView('empresas.exportPDF', compact('empresas'));
        $pdf->setPaper('a4'. 'landscape');
        return $pdf->stream();
    }
}

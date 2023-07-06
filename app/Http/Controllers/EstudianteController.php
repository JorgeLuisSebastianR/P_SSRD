<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\facade;
use PDF;
use App\Models\EstudianteModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = EstudianteModel::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('tipo', 'Alumno')->get();
        $generos = ['Hombre', 'Mujer'];
        $carreras = [
            'Ingeniero en Animación Digital y Efectos Visuales',
            'Ingeniería Industrial',
            'Ingeniería en Industrias Alimentarias',
            'Ingeniería Informática',
            'Ingeniería Mecatrónica',
            'Ingeniería en Sistemas Computacionales',
            'Ingeniería en Gestión Empresarial',
            'Licenciatura en Turismo'
        ];

        return view('estudiantes.create', compact('users', 'generos', 'carreras'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:20',
        'apellidoPaterno' => 'required|string|max:20',
        'apellidoMaterno' => 'required|string|max:20',
        'numControl' => 'required|string|max:8',
        'fechaNacimiento' => 'required|date',
        'genero' => 'required|in:Hombre,Mujer',
        'carrera' => 'required|string',
        'telefono' => 'required|string|max:10',
        'id' => 'required' // Asegura que user_id exista en la tabla users con tipo=Alumno
    ]);
    $user = Auth::user();
    $estudiante = new EstudianteModel();
    $estudiante->nombre = $request->nombre;
    $estudiante->apellidoPaterno = $request->apellidoPaterno;
    $estudiante->apellidoMaterno = $request->apellidoMaterno;
    $estudiante->numControl = $request->numControl;
    $estudiante->fechaNacimiento = $request->fechaNacimiento;
    $estudiante->genero = $request->genero;
    $estudiante->carrera = $request->carrera;
    $estudiante->telefono = $request->telefono;
    $estudiante->save();

    $user->estudiantes()->save($estudiante);
    return redirect()->route('estudiantes.index')->with('success', 'Estudiante creado exitosamente');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estudiante = EstudianteModel::findOrFail($id);
        return view('estudiantes.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estudiante = EstudianteModel::findOrFail($id);
        return view('estudiantes.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:20',
            'apellidoPaterno' => 'required|string|max:20',
            'apellidoMaterno' => 'required|string|max:20',
            'numControl' => 'required|string|max:8',
            'fechaNacimiento' => 'required|date',
            'genero' => 'required|in:Hombre,Mujer',
            'carrera' => 'required|string',
            'telefono' => 'required|string|max:10',
            'id' => 'required|exists:users,id',
        ]);

        $estudiante = EstudianteModel::findOrFail($id);
        $estudiante->nombre = $request->nombre;
        $estudiante->apellidoPaterno = $request->apellidoPaterno;
        $estudiante->apellidoMaterno = $request->apellidoMaterno;
        $estudiante->numControl = $request->numControl;
        $estudiante->fechaNacimiento = $request->fechaNacimiento;
        $estudiante->genero = $request->genero;
        $estudiante->carrera = $request->carrera;
        $estudiante->telefono = $request->telefono;
        $estudiante->user_id = $request->user_id;
        $estudiante->save();

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estudiante = EstudianteModel::findOrFail($id);
        $estudiante->delete();

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado exitosamente');
    }

    public function exportPDF(){
        $estudiantes = EstudianteModel::all();
        $pdf = PDF ::loadView('estudiantes.exportPDF', compact('estudiantes'));
        $pdf->setPaper('a4'. 'landscape');
        return $pdf->stream();
    }
}


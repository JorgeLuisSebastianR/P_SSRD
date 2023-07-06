<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\oportunidadController;
use App\Http\Controllers\EstatusOportunidadController;
use App\Http\Controllers\SolicitudEmpresaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EstatusSolicitudController;

use App\Http\Controllers\solicitudOrgController;
use App\Http\Controllers\SolicutudEstudianteController;



use App\Http\Controllers\CustomSolicitudEmpresaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcomeSI');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('oportunidades',oportunidadController::class);
Route::get('oportunidades-pdf', [oportunidadController::class, 'exportPDF'])->name('oportunidades.pdf');
Route::resource('estatuoportunidades',EstatusOportunidadController::class);
Route::resource('Aspirantes',SolicitudEmpresaController::class);
Route::resource('users',UserController::class);
Route::resource('estudiantes',EstudianteController::class);
Route::get('estudiantes-pdf', [EstudianteController::class, 'exportPDF'])->name('estudiantes.pdf');
Route::resource('empresas', EmpresaController::class);
Route::get('empresas-pdf', [EmpresaController::class, 'exportPDF'])->name('empresas.pdf');
Route::get('/estatussolicitudes', [CustomSolicitudEmpresaController::class, 'index'])->name('solicitudes.index');
Route::resource('solicitudes', SolicutudEstudianteController::class);
Route::resource('estatusSolicitudes', EstatusSolicitudController::class);

Route::resource('solicitudOrgs',solicitudOrgController::class);
Route::get('/solicitudes', [SolicutudEstudianteController::class, 'index'])->name('solicitudes.index');

Route::get('/ayudas/indexAyudaA', [App\Http\Controllers\AyudaController::class, 'index'])->name('ayudas');
Route::get('/contactos/indexcontactoE', [App\Http\Controllers\ContactoController::class, 'contactoE'])->name('contactos');
Route::get('/contactos/indexcontactoO', [App\Http\Controllers\ContactoController::class, 'contactoO'])->name('contactos');
Route::get('/ayudas/indexAyudaE', [App\Http\Controllers\AyudaController::class, 'AyudaE'])->name('AyudaE');
Route::get('/ayudas/indexAyudaO', [App\Http\Controllers\AyudaController::class, 'AyudaO'])->name('AyudaO');

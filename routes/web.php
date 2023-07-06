<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\oportunidadController;
use App\Http\Controllers\EstatusOportunidadController;
use App\Http\Controllers\SolicitudEmpresaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EmpresaController;

use App\Http\Controllers\solicitudOrgController;

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
Route::resource('estatuoportunidades',EstatusOportunidadController::class);
Route::resource('Aspirantes',SolicitudEmpresaController::class);
Route::resource('users',UserController::class);
Route::resource('estudiantes',EstudianteController::class);
Route::resource('empresas', EmpresaController::class);

Route::resource('solicitudOrgs',solicitudOrgController::class);

Route::get('/ayudas/indexAyudaA', [App\Http\Controllers\AyudaController::class, 'index'])->name('ayudas');
Route::get('/contactos/indexcontactoE', [App\Http\Controllers\ContactoController::class, 'contactoE'])->name('contactos');
Route::get('/contactos/indexcontactoO', [App\Http\Controllers\ContactoController::class, 'contactoO'])->name('contactos');





Route::get('/ayudas/indexAyudaE', [App\Http\Controllers\AyudaController::class, 'AyudaE'])->name('AyudaE');
Route::get('/ayudas/indexAyudaO', [App\Http\Controllers\AyudaController::class, 'AyudaO'])->name('AyudaO');

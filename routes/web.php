<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Rutas ya definidas */

require __DIR__.'/auth.php';
Route::get('/', [HomeController::class, 'senddata_user_iniciomedico'])->middleware('auth')->name('inicioMedico');
Route::get('/diagnosticosPaciente', [HomeController::class, 'asistencia']
)->middleware('auth')->name('diagnosticosPaciente');

/* Hasta aquí */



Route::view('/a', 'FormPrediagnostico') -> name('home');

Route::get('/dashboard', function () {
    return view('inicioUsuario');
});

Route::view('/asistepacientesmedico', 'asistePacientesMedico') -> name('asistePacientesMedico');

Route::view('/vermasmedicospaciente', 'verMasMedicosPaciente') -> name('lista_de_medicos');

Route::view('/registradiagnosticomedico', 'registraDiagnosticoMedico') -> name('lista_de_pacientes');

Route::view('RegistroExitoso', 'successlogin') -> name('successlogin');
Route::view('Formulario', 'FormPrediagnostico') -> name('FormPrediagnostico');
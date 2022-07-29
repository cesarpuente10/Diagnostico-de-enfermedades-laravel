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



require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'senddata_user_iniciomedico'])
->middleware('auth')->name('inicio');

Route::get('/diagnosticosPaciente', [HomeController::class, 'asistencia'])
->middleware('auth')->name('diagnosticosPaciente');



Route::view('/DatosUsuario', 'DatosUsuario') -> name('DatosUsuario');

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/asistepacientesmedico', [HomeController::class, 'senddata_user_asistePacientesMedico'])
->middleware('auth')->name('asistePacientesMedico');

Route::view('/vermasmedicospaciente', 'verMasMedicosPaciente') -> name('lista_de_medicos');

Route::view('/registradiagnosticomedico', 'registraDiagnosticoMedico') -> name('RegistraDiagnosticoMedico');

Route::view('/RegistroExitoso', 'successlogin') -> name('successlogin');
Route::view('/Formulario', 'FormPrediagnostico') -> name('FormPrediagnostico');
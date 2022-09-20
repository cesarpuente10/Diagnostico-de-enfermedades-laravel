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

//pagina inicial
Route::get('/', [HomeController::class, 'senddata_user_inicio'])
->middleware('auth')->name('inicio');

Route::get('/diagnosticospaciente', [HomeController::class, 'asistencia'])
->middleware('auth')->name('diagnosticospaciente');

//no disponible
Route::get('/pantallaNoDisponible', function () {
    return view('PantallaNoDisponible');
})->name('pantallaNoDisponible');

//perfiles
Route::get('/perfilp/{id}', [HomeController::class, 'read_info_paciente'])
->middleware('auth')->name('perfilp');

Route::get('/perfilp/edit/{id}', [HomeController::class, 'read_info_paciente_edit'])
->middleware('auth')->name('perfilpedit');

Route::get('/perfilm/{id}', [HomeController::class, 'read_info_medico'])
->middleware('auth')->name('perfilm');

Route::get('/perfilm/edit/{id}', [HomeController::class, 'read_info_medico_edit'])
->middleware('auth')->name('perfilmedit');

Route::post('/editm', [HomeController::class, 'update_info_medico'])
->middleware('auth')->name('editm');

//Asistencias
Route::post('/asistencia', [HomeController::class, 'create_asistencia'])
->middleware('auth')->name('asistencia');

Route::post('/prediagnostico', [HomeController::class, 'create_info_paciente'])
->middleware('auth')->name('prediagnostico');

Route::view('/DatosUsuario', 'DatosUsuario') -> name('DatosUsuario');

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/asistepacientesmedico', [HomeController::class, 'senddata_user_asistePacientesMedico'])
->middleware('auth')->name('asistepacientesmedico');

Route::view('/vermasmedicospaciente', 'verMasMedicosPaciente') -> name('lista_de_medicos');

Route::view('/registradiagnosticomedico', 'registraDiagnosticoMedico') -> name('RegistraDiagnosticoMedico');

Route::view('/registroExitoso', 'successlogin') -> name('successlogin');
Route::view('/formulario', 'FormPrediagnostico') -> name('prediagnostico');
Route::view('/consultorio', 'FormConsultorio') -> name('consultorio');
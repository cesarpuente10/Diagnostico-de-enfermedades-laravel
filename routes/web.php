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

Route::get('/diagnosticospaciente', [HomeController::class, 'senddata_paciente_diagnostico'])
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

Route::post('/editp', [HomeController::class, 'update_info_paciente'])
->middleware('auth')->name('editp');

Route::get('/perfilm/{id}', [HomeController::class, 'read_info_medico'])
->middleware('auth')->name('perfilm');

Route::get('/perfilm/edit/{id}', [HomeController::class, 'read_info_medico_edit'])
->middleware('auth')->name('perfilmedit');

Route::post('/editm', [HomeController::class, 'update_info_medico'])
->middleware('auth')->name('editm');

Route::post('/createprediagnostico', [HomeController::class, 'create_info_paciente'])
->middleware('auth')->name('createprediagnostico');

Route::post('/createinfoconsultorio', [HomeController::class, 'create_info_medico'])
->middleware('auth')->name('createinfoconsultorio');

//Asistencias
Route::post('/asistencia', [HomeController::class, 'create_asistencia'])
->middleware('auth')->name('asistencia');

//Ruta para página que muestra las asistencias que tiene el paciente
Route::get('/asistenciaspaciente', [HomeController::class, 'senddata_paciente_asistencias'])
->middleware('auth')->name('asistenciaspaciente');

//Ruta que hace una petición post y cambia el estado de la asistencia, así como también hace que se le muestre distinto al paciente
Route::post('/updateasistencia', [HomeController::class, 'update_asistencia'])
->middleware('auth')->name('updateasistencia');

//Ruta que hace una petición post y cambia el estado de la asistencia a rechazado
Route::post('/deleteasistencia', [HomeController::class, 'delete_asistencia'])
->middleware('auth')->name('deleteasistencia');

Route::post('/prediagnostico', [HomeController::class, 'create_info_paciente'])
->middleware('auth')->name('prediagnostico');

Route::view('/DatosUsuario', 'DatosUsuario') -> name('DatosUsuario');

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/verpacientes', [HomeController::class, 'senddata_medico_pacientes'])
->middleware('auth')->name('verpacientes');


Route::view('/vermasmedicospaciente', 'verMasMedicosPaciente') -> name('lista_de_medicos');

Route::view('/registradiagnosticomedico', 'registraDiagnosticoMedico') -> name('RegistraDiagnosticoMedico');

Route::view('/registroExitoso', 'successlogin') -> name('successlogin');
Route::view('/formulario', 'formularioprediagnostico') -> name('prediagnostico');
Route::view('/consultorio', 'FormConsultorio') -> name('consultorio');
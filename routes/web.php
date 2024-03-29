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

Route::get('/diagnosticospaciente/{id}', [HomeController::class, 'send_diagnosticos_paciente']) 
->middleware('auth')->name('diagnosticospaciente');

Route::post('/deletediag', [HomeController::class, 'delete_diagnostico_paciente'])
->middleware('auth')->name('deletediagnostico');

Route::post('/editdiag', [HomeController::class, 'edit_diagnostico'])
->middleware('auth')->name('editdiagnostico');

Route::get('/verasistencia/{id}', [HomeController::class, 'send_diagnosticos'])
->middleware('auth')->name('verasistencia');

require __DIR__.'/auth.php';
//pagina inicial con sesión iniciada
Route::get('/', [HomeController::class, 'senddata_user_inicio'])
->middleware('auth')->name('inicio');

//pagina inicial sin sesión iniciada
Route::get('/home', function () {
    return view('sinsesion/home');
})->name('home');

//no disponible
Route::get('/pantallaNoDisponible', function () {
    return view('PantallaNoDisponible');
})->name('pantallaNoDisponible');

//perfiles
Route::get('/perfilp/{id}', [HomeController::class, 'read_info_paciente'])
->middleware('auth')->name('perfilp');

Route::get('/perfilp/edit/{id}', [HomeController::class, 'read_info_paciente_edit'])
->middleware('auth')->name('perfilpedit');

//Editar información del paciente
Route::post('/editp', [HomeController::class, 'update_info_paciente'])
->middleware('auth')->name('editp');

Route::get('/perfilm/{id}', [HomeController::class, 'read_info_medico'])
->middleware('auth')->name('perfilm');

Route::get('/perfilm/edit/{id}', [HomeController::class, 'read_info_medico_edit'])
->middleware('auth')->name('perfilmedit');

//Editar información del médico
Route::post('/editm', [HomeController::class, 'update_info_medico'])
->middleware('auth')->name('editm');

//Ver pantalla para crear el prediagnóstico
Route::view('/formulario', 'pacientes/formularioprediagnostico')->name('prediagnostico');

//Creación del prediagnóstico
Route::post('/createprediagnostico', [HomeController::class, 'create_info_paciente'])
->middleware('auth')->name('createprediagnostico');

//Ver pantalla para crear el consultorio
Route::view('/consultorio', 'medicos/FormConsultorio')->name('consultorio');

//Creación del consultorio
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

//diagnósticos
Route::get('/formularioDiagnostico/{id}', [HomeController::class, 'info_asistencia'])
->middleware('auth')->name('formularioDiagnostico');

//Creación
Route::post('/diagnostico', [HomeController::class, 'create_diagnostico'])
->middleware('auth')->name('diagnostico');
//Edición
Route::post('/updatediagnostico', [HomeController::class, 'update_diagnostico'])
->middleware('auth')->name('updatediagnostico');
//Lectura
//Route::view('/editdiagnostico', 'formularioDiagnostico') -> name('editdiagnostico');

//Edición
Route::post('/updatediagnostico', [HomeController::class, 'update_diagnostico'])
->middleware('auth')->name('updatediagnostico');

//Eliminación

Route::view('/DatosUsuario', 'DatosUsuario') -> name('DatosUsuario');




Route::get('/verpacientes', [HomeController::class, 'senddata_medico_pacientes'])
->middleware('auth')->name('verpacientes');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Admin

//Buscador de usuarios
Route::post('/buscausuario', [HomeController::class, 'buscar_usuario'])
->middleware('auth')->name('buscausuario');

//Eliminador de pacientes
Route::post('/eliminarusuario', [HomeController::class, 'eliminar_usuario'])
->middleware('auth')->name('eliminausuario');

//Ver pacientes de los médicos
Route::get('/pacientes/{id}', [HomeController::class, 'ver_pacientes'])
->middleware('auth')->name('pacientes');

//Ver asistencias de los pacientes
Route::get('/asistenciaspaciente/{id}', [HomeController::class, 'ver_asistencias_paciente'])
->middleware('auth')->name('pacientes');

//Buscar asistencia
Route::post('/asistenciabuscada', [HomeController::class, 'buscar_asistencia'])
->middleware('auth')->name('getasistencia');
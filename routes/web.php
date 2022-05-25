<?php

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

Route::view('/', 'home') -> name('home');

Route::view('/datosusuario', 'DatosUsuario') -> name('datosusuario');

Route::get('/dashboard', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::view('RegistroExitoso', 'successlogin') -> name('successlogin');
Route::view('Formulario', 'FormPrediagnostico') -> name('FormPrediagnostico');


Route::get('blog', 'BlogController@index') -> name('blog.index');
Route::get('blog/{post:slug}', 'BlogController@show') -> name('blog.show');

Route::view('contactos', 'contact') -> name('contact');

/* Route::get('/', function () {
    return view('welcome');
});
 */
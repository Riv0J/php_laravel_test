<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
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
//busca el nombre de la view+.php
/*Route::get('/', function () {
    return view('home');
});
*/
//FUNCTION DEL CONTROLLER
//ruta del request, ruta controlador y funcion que ejecuta, enviada como string
Route::get('/', [\App\Http\Controllers\HomeController::class, 'welcome'])->name('inicio');

//PARAMETRO EN RUTA
//se toma una variable de la ruta, y se envia en la funcion para usarla
Route::get('/saludar/{username}', function ($username) {
    echo "hola $username";
});

//PARAMETROS OPCIONALES
//la variable tiene un valor asignado en caso de que no exista
Route::get('/visitante/{username?}', function ($username='invitado') {
    echo "hola $username";
});

//DIFERENTES PARAMETROS
//se toma una variable de la ruta, y se envia en la funcion para usarla
Route::get('/saludar/nombre/{username}/apellido/{lastname}', function ($username, $lastname) {
    echo "hola $username $lastname";
});

//RUTAS CON EXPRESIONES (VALIDACIONES DE VARIABLES)
Route::get('/saludar/nombre/{username}/edad/{edad}', function ($username, $edad) {
    echo "hola $username, y tienes $edad anios";
})->where([
    'username' => '[a-zA-Z]+',
    'edad' => '[0-9]{2}',
])->name('saluditos');

//POST
Route::post('/saludar/nombre/{username}/apellido/{lastname}', function ($username, $lastname) {
    echo "hola $username $lastname";
});

//RUTA DE RECURSOS, GENERA TODAS LAS RUTAS CREATE, INSERT, INDEX. ETC DE LA CLASE
//ver todos los recursos php artisan route:list
Route::resource('peluche', App\Http\Controllers\TeddieController::class);

// SE LLAMARÍA EN UN LINK: <a href = {{route('peluche.create')}}></a>

//php artisan

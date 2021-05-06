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

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function() {
    return '<h1> Benvenuto nella homepage </h1>';
});
Route::get('dove-trovarci', function() {
    return '<h2> Seconda stella a destra </h2>';
});
Route::get('not-a-page', function() {
    return '<h3> Questa non è una pagina </h3>
            <img src="https://miro.medium.com/max/1200/0*MeEPPXJehXISLNV4.jpg" alt="Pipa">';
});
Route::get('subscribe', function() {
    return '<h1>Iscriviti</h1>
            <label>Nome</label>
            <input type="text" placeholder="Inserisci il tuo Nome">
            <label>E-mail</label>
            <input type="text" placeholder="Inserisci la tua E-Mail">
            <button>Vai!</button>';
});


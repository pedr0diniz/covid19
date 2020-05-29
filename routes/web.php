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
    return view('inicio');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inicio','HomeController@rdrInicio');
Route::get('/consultaDados','HomeController@rdrConsultaDados');
Route::get('/agendamento', 'HomeController@rdrAgendamento');
Route::get('/agendamento/{id}', 'HomeController@showAgendamento');
Route::get('/PEP', 'HomeController@rdrPEP');
Route::get('/acompEnfermagem', 'HomeController@rdrAcompEnfermagem');
Route::get('/acompMedico', 'HomeController@rdrAcompMedico');
Route::get('/acompPsico', 'HomeController@rdrAcompPsico');
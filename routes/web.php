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

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inicio','HomeController@rdrInicio');
Route::get('/agenda','HomeController@rdrAgenda');
Route::get('/consultaDados','HomeController@rdrConsultaDados');
Route::get('/agendamento', 'HomeController@rdrAgendamento');
Route::get('/PEP', 'HomeController@rdrPEP');
Route::get('/acompEnfermagem', 'HomeController@rdrAcompEnfermagem');
Route::get('/acompMedico', 'HomeController@rdrAcompMedico');
Route::get('/acompPsico', 'HomeController@rdrAcompPsico');
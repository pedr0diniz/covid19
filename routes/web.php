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

Route::get('/triagem','TriagemController@rdrTriagem');

Route::get('/consultaDados','HomeController@rdrConsultaDados');

Route::get('/funcionario', 'FuncionarioController@rdrFuncionario');
Route::get('/funcionario/{id}', 'FuncionarioController@showFuncionario');
Route::get('/funcionario/edit/{id}', 'FuncionarioController@editFuncionario');
Route::patch('/funcionario/{id}', 'FuncionarioController@update');
Route::post('/funcionario', 'FuncionarioController@store');
Route::delete('/funcionario/{id}', 'FuncionarioController@destroy');

Route::get('/agendamento', 'AgendamentoController@rdrAgendamento');
Route::get('/agendamento/{id}', 'AgendamentoController@showAgendamento');
Route::get('/agendamento/edit/{id}', 'AgendamentoController@editAgendamento');
Route::patch('/agendamento/{id}', 'AgendamentoController@update');
Route::post('/agendamento', 'AgendamentoController@store');
Route::delete('/agendamento/{id}', 'AgendamentoController@destroy');

Route::get('/PEP', 'PEPController@rdrPEP');

Route::get('/acompEnfermagem', 'AcompEnfermagemController@rdrAcompEnfermagem');

Route::get('/acompMedico', 'AcompMedicoController@rdrAcompMedico');

Route::get('/acompPsico', 'AcompPsicoController@rdrAcompPsico');
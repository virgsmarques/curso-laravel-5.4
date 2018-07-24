<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


* Informaçõoes do professor
*
* get ('rota', function() {})
* post ('rota', function() {})
* delete ('rota', function() {})
* put ('rota', function() {}) 
* path ('rota', function() {})
* options ('rota', function() {})
* match (['get','post'], rota', function() {})
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name?}', 'HelloController@index');
Route::post('/hello/{name?}', 'HelloController@render');

// GET é responsavel por acesso a rotas
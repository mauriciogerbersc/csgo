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

Route::get('/', 'IndexController@index');
Route::get('/skins/{gun}', 'IndexController@readJSON');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/weapons/{gun}', 'IndexController@weapon')->name('weapon');

Route::get('/pistols', 'IndexController@pistols')->name('pistols');


Route::get('/smgs', 'IndexController@smgs')->name('smgs');
Route::get('/heavy', 'IndexController@heavy')->name('heavy');
Route::get('/rifles', 'IndexController@rifles')->name('rifles');
Route::post('/gunsearch', 'IndexController@search')->name('gunsearch');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/jogos', 'JogosController@index')->name('listar_jogos');
Route::get('/admin/jogos/create', 'JogosController@create');
Route::post('/admin/jogos/create', 'JogosController@store');

Route::get('/admin/categorias_armas', 'ArmasCategoriasController@index')->name('listar_categorias');
Route::get('/admin/categorias_armas/create', 'ArmasCategoriasController@create')->name('criar_categoria');
Route::post('/admin/categorias_armas/create', 'ArmasCategoriasController@store');

Route::get('/admin/guns', 'GunsController@index')->name('listar_armas');
Route::get('/admin/gun/{id}', 'GunsController@edit')->name('editar_arma');
Route::post('/admin/gun/{id}', 'GunsController@update');
Route::get('/admin/guns/create', 'GunsController@create')->name('criar_arma');
Route::post('/admin/guns/create', 'GunsController@store');


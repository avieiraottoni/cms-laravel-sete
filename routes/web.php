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

Route::namespace('Site')->group(function(){
    Route::get('/', 'HomeController@index');

    Route::get('/produtos', 'CategoryController@index');
    Route::get('/produtos/{slug}', 'CategoryController@show');

    Route::get('/blog', 'BlogController');

    //página estática
    Route::view('/sobre', 'site.about.index');

    //rotas para contatos.
    Route::get('/contato', 'ContactController@index')->name('site.contact');
    Route::post('/contato', 'ContactController@form')->name('site.contact.form');
});
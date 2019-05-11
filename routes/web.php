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
*/
View::composer('categories.index', function($view){
  $view->with('categories', App\Http\Models\Categorie::all());
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'RessourceController@index')->name('templates/homepage');
Route::resource('ressources', 'RessourceController');

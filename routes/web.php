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

Route::get('dependent-dropdown', 'DependentDropdownController@index')
    ->name('dependent-dropdown.index');

Route::post('dependent-dropdown', 'DependentDropdownController@store')
    ->name('dependent-dropdown.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

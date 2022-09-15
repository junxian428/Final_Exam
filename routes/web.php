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



Route::get('/', [
    'uses'=> 'App\Http\Controllers\Q3Controller@index',
    'as' => 'Q3.index'
]);

Route::post('/AddW', [
    'uses'=> 'App\Http\Controllers\Q3Controller@add',
    'as' => 'Q3.add'
]);


Route::post('/WCreate', [
    'uses'=> 'App\Http\Controllers\Q3Controller@WorkshopCreate',
    'as' => 'workshop.create'
]);
Route::post('/PCreate', [
    'uses'=> 'App\Http\Controllers\Q3Controller@PCreate',
    'as' => 'participant.create'
]);

Route::get('/delete/{id}', [
    'uses'=> 'App\Http\Controllers\Q3Controller@delete',
    'as' => 'delete'
]);

Route::post('/GOEdit', [
    'uses'=> 'App\Http\Controllers\Q3Controller@GOEdit',
    'as' => 'contact.GOEdit'
]);
// Step 2 Edit
Route::post('/GOEdit2', [
    'uses'=> 'App\Http\Controllers\Q3Controller@GOEdit2',
    'as' => 'contact.GOEdit2'
]);
Route::get('/Q4', [
    'uses'=> 'App\Http\Controllers\Q4Controller@index',
    'as' => 'Q4.index'
]);
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

use App\Services\populationClass;
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

App::bind('population', function() {
    return new \App\Services\populationClass();
});

Route::get('/usPopulation', function(populationClass $populationClass) {
    dd(resolve('population'));
});

Route::get('/', function () {
    return view('welcome');
});

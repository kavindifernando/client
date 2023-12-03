<?php
namespace App\Http\Controllers;
namespace App\Models;
use Illuminate\Support\Facades\Route;
// controllers
use App\Http\Controllers\OnboardController;
use App\Http\Controllers\clientpopulatedController;
// models
use App\Models\Onboard;




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
// client get method path
Route::get('/', function () {
    return view('/client');
});
// get method complete path
Route::get('clients2', function () {
    return view('/client2');
});
// retrive data path
Route::get('clientpopulated', 'clientpopulatedController@show');
//client get method path
Route::post('/storeclient', 'OnboardController@store');

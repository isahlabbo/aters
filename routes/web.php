<?php
use App\Services\Sokoto;
use App\Services\Register;
use App\Services\CreateLocalGovernment;
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
    return view('auth.login');
});

Route::post('/accredited', 'HomeController@accredited');
Route::post('/result', 'HomeController@result');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

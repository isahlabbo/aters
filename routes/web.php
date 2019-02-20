<?php
use App\Services\Sokoto;
use App\Services\Register;
use App\Services\CreateLocalGovernment;
use App\Lga;
use App\Ward;
use App\Center;
use App\User;

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
Route::post('/registered', 'HomeController@registered');
Route::post('/result', 'ElectionResultController@sendResult');
Route::post('/resolve_incidence', 'IncidenceController@resolveIncidence');
Route::post('/edit_incidence', 'IncidenceController@editIncidence');
Route::post('/ward_incidence', 'IncidenceController@wardIncidence');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/add_result', 'HomeController@newResult');
Route::post('/edit_result', 'ElectionResultController@editResult');
Route::post('/new_incidence', 'IncidenceController@newIncidence');
Route::post('/insert_incidence', 'IncidenceController@insertIncidence');

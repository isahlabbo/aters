<?php
use App\Services\Sokoto;
use App\Services\Register;
use App\Services\CreateLocalGovernment;
use App\Lga;
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

Route::get('/test', function () {
	new Register(new Sokoto());
});
Route::post('/accredited', 'HomeController@accredited');
Route::post('/registered', 'HomeController@registered');
Route::post('/result', 'ElectionResultController@sendResult');
Route::post('/resolve_incidence', 'IncidenceController@resolveIncidence');
Route::post('/edit_incidence', 'IncidenceController@editIncidence');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/add_result', 'HomeController@newResult');
Route::post('/edit_result', 'ElectionResultController@editResult');
Route::post('/incidence', 'HomeController@incidence');

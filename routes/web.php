<?php
use App\Person;
use Illuminate\Support\Facades\Input;

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

//routes file for all the data
Route::get('/', function () {
    
    return view('auth.login');

});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'PeopleController');
Route::post('/users/store','PeopleController@store');
Route::post('list','PeopleController@getList')->name('list');


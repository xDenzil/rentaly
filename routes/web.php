<?php

use App\Http\Controllers\PropertyController;
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
    return view('index');
});

Route::get('/login', function () {
    $name = request('name');

    return view('login', [
        'name' => $name
    ]);
});

Route::get('listing/{listing_id}', 'ListingController@show');

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/manage/{user_id}', 'PropertyController@manage');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/feed', 'PropertyController@index');

Route::get('/feed/{id}', 'PropertyController@show');

Route::get('/map/{prop_id}', 'MapController@show');

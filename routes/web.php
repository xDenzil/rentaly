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

Route::get('/map', 'MapController@index');



/*   Registration  */


Route::get('/register', function () {
    return view('register.index');
});

Route::get('/register/u/interests', function () {
    return view('register.user.interests');
});

Route::get('/register/u/completed', function () {
    return view('register.user.completed');
});

Route::get('/register/o/add-rooms', function () {
    return view('register.owner.add-rooms');
});

Route::get('/register/o/completed', function () {
    return view('register.owner.completed');
});

Route::get('/register/o/create-listing', function () {
    return view('register.owner.create-listing');
});

Route::get('/register/o/new-property', function () {
    return view('register.owner.new-property');
});

Route::get('/register/o/property-details', function () {
    return view('register.owner.property-details');
});

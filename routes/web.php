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

    $title = 'Welcome!';
    $user = rand(1, 999);
    $bye = 'See you tomorrow.';

    // * Put data into an array
    $data = compact('title', 'user', 'bye');

    return view('home', $data);
});

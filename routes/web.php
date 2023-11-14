<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master_page', function () {
    return view('master_page');
});

Route::get('/inicio', function () {
    return view('todos.inicio');
});

Route::get('/login', function () {
    return view('todos.login');
});
Route::get('/register', function () {
    return view('todos.register');
});

Route::get('/conexion', function () {
    return view('todos.conexion');
});




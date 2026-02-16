<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); });
Route::get('/especies', function () { return view('especies'); });
Route::get('/contacto', function () { return view('contacto'); });
Route::get('/perfil', function () { return view('perfil'); });

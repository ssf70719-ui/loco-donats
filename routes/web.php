<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/computers', function () {
    return view('computers');
});

Route::get('/mans_clothes', function () {
    return view('mans_clothes');
});

Route::get('/womans_clothes', function () {
    return view('womans_clothes');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/redpool', function () {
    return view('redpool');
});

Route::get('/waffles', function () {
    return view('waffles');
});

Route::get('/about', function () {
    return view('about');
});

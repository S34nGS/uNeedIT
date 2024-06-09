<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/over-ons', function () {
    return view('overOns');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/zakelijk', function () {
    return view('zakelijk');
});

Route::get('/faq', function () {
    return view('faq');
});
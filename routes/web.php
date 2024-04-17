<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        "image" => "img_avatar.png",
        "title" => "Home"
    ]);
});

Route::get('/cashier', function () {
    return view('cashier', [
        "image" => "img_avatar.png",
        "title" => "Cashier"
    ]);
});

Route::get('/suhu', function () {
    return view('suhu', [
        "image" => "img_avatar.png",
        "title" => "Suhu"
    ]);
});

Route::get('/luas-volume', function () {
    return view('luas-volume', [
        "image" => "img_avatar.png",
        "title" => "Luas Volume"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "image" => "img_avatar.png",
        "title" => "Luas Volume"
    ]);
});
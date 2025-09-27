<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::get('auth/test', fn() => "Auth package de PixelGuru95 fonctionne !");
});

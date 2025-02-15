<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'dashboard']); // Dashboard Route
Route::get('/services', [PageController::class, 'services']); // Services Route
Route::get('/contact', [PageController::class, 'contact']); // Contact Us Route

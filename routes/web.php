<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Define the route
Route::get('/my-profile/{id}', [ProfileController::class, 'index']);
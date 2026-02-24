<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeaturesController;

Route::get('/', [FeaturesController::class, 'index']);

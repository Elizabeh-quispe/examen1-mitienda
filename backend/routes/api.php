<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;


Route::apiResource('marcas', MarcaController::class);
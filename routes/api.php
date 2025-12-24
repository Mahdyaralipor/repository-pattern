<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::apiResource('product', ProductController::class);


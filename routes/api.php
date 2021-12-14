<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BannerController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\ChooseController;
use App\Http\Controllers\Api\ClientsController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\FaqsController;


Route::middleware('auth:api')->group(function(){


    Route::apiResource('banners', BannerController::class);
    Route::apiResource('services', ServiceController::class);
    Route::apiResource('chooses', ChooseController::class);
    Route::apiResource('clients', ClientsController::class);
    Route::apiResource('news', NewsController::class);
    Route::apiResource('teams', TeamController::class);
    Route::apiResource('faqs', FaqsController::class);

    Route::post('user/logout', [UserController::class, 'logout']);

});

Route::post('login', AuthController::class);

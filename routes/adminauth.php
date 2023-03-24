<?php

use App\Http\Controllers\Adminauth\AuthenticatedSessionController;
use App\Http\Controllers\Adminauth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['guest:admin'],'prefix'=>'admin','as'=>'admin.'],function(){

    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    
});

Route::group(['middleware' => ['auth:admin'],'prefix'=>'admin','as'=>'admin.'],function(){


    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

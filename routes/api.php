<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;
use App\Http\Controllers\Api\V3\PostController as PostV3;

use App\Http\Controllers\Api\LoginController;


Route::post('login', [LoginController::class, 'login']);


Route::apiResource('v1/posts', PostV1::class)
    ->only(['index', 'show', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('v2/posts', PostV2::class)
    ->only(['index', 'show'])
    ->middleware('auth:sanctum');

Route::apiResource('v3/posts', PostV3::class)
    ->only(['store', 'update'])
    ->middleware('auth:sanctum');

/*
AUTENTICACION AGRUPADOS
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('v1/posts', PostV1::class);
    Route::apiResource('v2/posts', PostV2::class);
});*/
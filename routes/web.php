<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecommendationController;

Route::get('/', [RecommendationController::class, 'welcome']);
Route::get('/index', [RecommendationController::class, 'index']);
Route::get('/input', [RecommendationController::class, 'input']);
Route::get('/list', [RecommendationController::class, 'list']);
Route::post('/input', [RecommendationController::class, 'input'])->name('input.name');
Route::post('/recommendation', [RecommendationController::class, 'process'])->name('recommendation.process');


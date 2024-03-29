<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\RecipeController;
use App\Http\Controllers\Api\TagController;





Route::get('categories',            [CategoryController::class, 'index']);
Route::get('categories/{category}', [CategoryController::class, 'show']);

Route::ApiResource('recipes', RecipeController::class);





Route::get('tags',                  [TagController::class, 'index']);
Route::get('tags/{tag}',            [TagController::class, 'show']);
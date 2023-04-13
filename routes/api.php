<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\IngredientsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'recipes'], function () {
    Route::post('/', [RecipesController::class, 'create']);
    Route::get('/', [RecipesController::class, 'list']);
    Route::get('/{id}', [RecipesController::class, 'show']);
    Route::patch('/{id}', [RecipesController::class, 'update']);
    Route::delete('/{id}', [RecipesController::class, 'delete']);
});

Route::group(['prefix' => 'ingredients'], function () {
    Route::post('/', [IngredientsController::class, 'create']);
    Route::get('/', [IngredientsController::class, 'list']);
    Route::get('/{id}', [IngredientsController::class, 'show']);
    Route::patch('/{id}', [IngredientsController::class, 'update']);
    Route::delete('/{id}', [IngredientsController::class, 'delete']);
});

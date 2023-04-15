<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\UrlsController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PicturesController;
use App\Http\Controllers\RecipeIngredientRelationsController;

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
Route::group(['prefix' => 'urls'], function () {
    Route::post('/', [UrlsController::class, 'create']);
    Route::get('/', [UrlsController::class, 'list']);
    Route::get('/{id}', [UrlsController::class, 'show']);
    Route::patch('/{id}', [UrlsController::class, 'update']);
    Route::delete('/{id}', [UrlsController::class, 'delete']);
});

Route::group(['prefix' => 'people'], function () {
    Route::post('/', [PeopleController::class, 'create']);
    Route::get('/', [PeopleController::class, 'list']);
    Route::get('/{id}', [PeopleController::class, 'show']);
    Route::patch('/{id}', [PeopleController::class, 'update']);
    Route::delete('/{id}', [PeopleController::class, 'delete']);
});

Route::group(['prefix' => 'pictures'], function () {
    Route::post('/', [PicturesController::class, 'create']);
    Route::get('/', [PicturesController::class, 'list']);
    Route::get('/{id}', [PicturesController::class, 'show']);
    Route::patch('/{id}', [PicturesController::class, 'update']);
    Route::delete('/{id}', [PicturesController::class, 'delete']);
});

Route::group(['prefix' => 'pictures'], function () {
    Route::post('/', [RecipeIngredientRelationsController::class, 'create']);
    Route::get('/', [RecipeIngredientRelationsController::class, 'list']);
    Route::get('/{id}', [RecipeIngredientRelationsController::class, 'show']);
    Route::patch('/{id}', [RecipeIngredientRelationsController::class, 'update']);
    Route::delete('/{id}', [RecipeIngredientRelationsController::class, 'delete']);
});

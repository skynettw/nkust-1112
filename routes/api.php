<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get("/all", [MainController::class, "all"]);
Route::get("/author/{id}", [MainController::class, "author"]);
Route::get("/poem/{authorid}", [MainController::class, "poem"]);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

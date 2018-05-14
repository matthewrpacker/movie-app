<?php

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Resources\Movie as MovieResource;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/movies', function () {
    return new MovieResource(Movie::all());
    // If you want the return to be ordered by descending.
    // return new MovieResource(Movie::orderByDesc('year')->get());
});

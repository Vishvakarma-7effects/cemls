<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apis;
use App\Models\Plot;

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

Route::post('login', [Apis::class,'login']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group( function () {
    Route::get('/first-api', [Apis::class,'firstapi']);
    Route::post('/cemetery-create', [Apis::class,'cemeterycreate']);
    Route::post('/plot-create', [Apis::class,'plotcreate']);

    Route::get('cemetery/{id}/', [Apis::class, 'getallplots']);
    Route::get('cemetery/{cemeteryid}/plot/{plotid}', [Apis::class, 'getplotshow']);
    Route::get('/cemeteries', [Apis::class, 'getallcemeteries']);
    Route::get('/cemeteries/{id}', [Apis::class, 'getallcemeteryshow']);
});
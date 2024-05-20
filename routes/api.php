<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\BonusesController;
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

Route::get('/providers',[ProviderController::class,'listProviders']);

//------------------------------
/*Gestion de bonos*/
Route::get('/bonuses',[BonusesController::class, 'listBonuses']);

/*Registrar un nuevo Cliente*/
Route::post('bonuses/save', [BonusesController::class, 'saveBonuses']);

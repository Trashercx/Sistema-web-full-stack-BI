<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\KPIController;
use App\Http\Controllers\API\BSCController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para KPI
Route::post('/kpis/{id}/valores', [KPIController::class, 'storeValorKPI']);
Route::get('/kpis/{id}', [KPIController::class, 'show']);

// Rutas para BSC
Route::get('/bsc/{id}', [BSCController::class, 'show']);
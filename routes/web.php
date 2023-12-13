<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\employees;
use App\Http\Controllers\Metrailpricing;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\CreateScheduleController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\LoadUPController;
use App\Http\Controllers\FleetandTrailersController;
use App\Http\Controllers\TimeSheetsController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',  [LoginController::class,'index']);
Route::get('/dashboard',  [DashboardController::class,'index']);
Route::get('/employees',  [employees::class,'index']);
Route::get('/metrailpricing',  [Metrailpricing::class,'index']);
Route::get('/schedules',  [SchedulesController::class,'index']);
Route::get('/createschedule',  [CreateScheduleController::class,'index']);
Route::get('/materials',  [MaterialsController::class,'index']);
Route::get('/losdups',  [LoadUPController::class,'index']);
Route::get('/fleetandtrailer',  [FleetandTrailersController::class,'index']);
Route::get('/timesheets',  [TimeSheetsController::class,'index']);
Route::get('/search',  [SearchController::class,'index']);

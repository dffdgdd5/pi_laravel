<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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


Route::post('Albrecht/309953/people/create',[PeopleController::class,'create']);
Route::get('Albrecht/309953/people/read/{id}',[PeopleController::class,'read']);
Route::get('Albrecht/309953/people/readall',[PeopleController::class,'readall']);
Route::put('Albrecht/309953/people/update',[PeopleController::class,'update']);
Route::delete('Albrecht/309953/people/delete',[PeopleController::class,'delete']);


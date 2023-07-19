<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceptionDash;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SalonownerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
    //echo "<h1>Default request</h1>";
});

//RoleController->all()
Route::get('role/all',[RoleController::class, 'all']);
Route::get('role',[RoleController::class, 'all']);  
Route::get('role/add',[RoleController::class, 'add']);
Route::get('role/edit',[RoleController::class, 'edit']);

Route::get('Salonowner',[SalonownerController::class,'all']);
    

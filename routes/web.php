<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmpgroupController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('department',DepartmentController::class);

Route::resource('employee',EmployeeController::class);

Route::resource('customer',CustomerController::class);

Route::resource('project',ProjectController::class);

Route::resource('empgroup',EmpgroupController::class);
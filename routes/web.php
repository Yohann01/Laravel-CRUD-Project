<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use App\Models\Department;
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


//  Common Resource Routes:
//  index - Show all data
//  show - Show single Data
//  crete - Show form to crete new data
//  store - Store new data
//  edit - Show form to edit data
//  update - Update data
//  destroy - Delete data


//Show Employees data 
Route::get('/', [EmployeeController::class, 'index']);
//Create Employee Data form 
Route::get('/createemployee', [EmployeeController::class, 'create']);
//Store Employee Data
Route::post('/createemployee', [EmployeeController::class, 'store']);
//Show edit Employee data form 
Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit']);
//Update Employee Data
Route::put('/employee/{employee}/edit', [EmployeeController::class, 'update']);




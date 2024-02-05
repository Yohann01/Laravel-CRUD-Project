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

/*-----------------------------EMPLOYEE-----------------------------*/

//Show Employees data 
Route::get('/', [EmployeeController::class, 'index']);
//Create Employee Data form (not functional yet)
Route::get('/createemployee', [EmployeeController::class, 'create']);
//Store Employee Data
Route::post('/createemployee', [EmployeeController::class, 'store']);
//Show dit Employee data form (not functional yet)
Route::get('/edit/{employee}', [EmployeeController::class, 'edit']);


/*-----------------------------DEPARTMENT-----------------------------*/

//Show Departments data
Route::get('/departments/index', [DepartmentController::class, 'index']);



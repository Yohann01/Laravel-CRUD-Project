<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //Show all employee data
    public function index()
    {
        return view('employees.index',[
            'employeedata' => Employee::all()
        ]);
    }

    //Create Employee Data (not functional yet)
    public function create()
    {
        return view('employees.create');
    }

    //Show single employee data
    public function edit(Employee $employee)
    {
        return view('employees.edit',[
            'employeedata' => $employee
        ]);
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //Show all employee data
    public function index()
    {
        return view('employees',[
            'employeedata' => Employee::all()
        ]);
    }

    //Create Employee Data (not functional yet)
    public function create()
    {
        return view('createEmployee');
    }

    //Show single employee data
    public function edit(Employee $employee)
    {
        return view('editEmployee',[
            'employeedata' => $employee
        ]);
    }


}

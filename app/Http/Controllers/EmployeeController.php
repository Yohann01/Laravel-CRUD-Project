<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;
use function Laravel\Prompts\search;

class EmployeeController extends Controller
{
    //Show all employee data
    public function index()
    {
        //$search = request('search');
        //dd($search);
        return view('employees.index',[
            'employeedata' => Employee::latest()->filter(request(['search']))->get()
        ]);
    }

    //Create Employee Data (not functional yet)
    public function create()
    {
        return view('employees.create');
    }
    //Strore Employee Data
    public function store(Request $request)
    {
        $form = $request->validate([
        'employee_number' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'birthdate' => 'required',
        'contact_number' => 'required',
        'email' => ['required', 'email', Rule::unique('employees', 'email')]
        ]);

        Employee::create($form);

        return redirect('/');
        
    }

    public function edit(Employee $employee)
    {
        //dd($employee->first_name);
        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Request $request, Employee $employee)
    {
        $form = $request->validate([
            'employee_number' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required',
            'contact_number' => 'required',
            'email' => ['required', 'email']
            ]);
    
            $employee->update($form);
    
            return back()->with('message', 'Employee data updated successfully!!!');
    }

}

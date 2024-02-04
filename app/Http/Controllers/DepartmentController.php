<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //Show departments data
    public function index()
    {
        return view('/departments.index',[
            'departments' => Department::all()
        ]);
    }
}
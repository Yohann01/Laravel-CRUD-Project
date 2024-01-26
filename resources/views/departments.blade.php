@extends('layout')
@section('content')
<div class="container my-5">
    <div class="row">
        <h2>Departments</h2>

        <div class="row">
            <div class="col-lg-6">
            <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#createEmployeeModal">Create Department</button>
                <a class="btn btn-success" href="/crudwebsite/create.php" role="button">Export to Excel</a>
            </div>
        </div>
    </div>
<div  id = "employeesContainer" >
<table class="table " id="dataTable">
    <thead>
        <tr>
            <td>ID</td>
            <td>Department Name</td>
            <td class="text-center">Action</td>
            <td>Date Created</td>
            <td>Date Updated</td>
        </tr>
    </thead>
    @foreach ($departments as $department)
    <tbody>
        <tr class="text-secondary">
            <td>{{$department->id}}</td>
            <td>{{$department->department_name}}</td>
            <td class="text-center">
                <a class="btn btn-primary btn-sm editBtn">Edit</a>
                <a class="btn btn-secondary btn-sm">Calculate</a>
                <a class="btn btn-danger btn-sm">Delete</a>
            </td>
            <td>{{$department->created_at}}</td>
            <td>{{$department->updated_at}}</td>
        </tr>     

@endforeach

@endsection
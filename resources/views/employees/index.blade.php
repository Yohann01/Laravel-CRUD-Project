<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Employees</h2>
            <div class="row">
                <div class="col-md-8">
                    <form method="get" action="/">
                    <a class="btn btn-secondary m-1" href="/createemployee" role="button">Create Employee</a>
                    <a class="btn btn-success" role="button">Export to Excel</a>
                </div>

                <div class="col-md-4 d-flex align-items-center justify-content-end">
                    <input class="form-control" type="search" placeholder="Search Employee..." name="search"/>
                    <button class="btn btn-outline-success m-1" type="submit">Search</button>
                </div>
                </form>
            </div>
        </div>
        
    <div id = "employeesContainer">
    <table class="table" id="dataTable">
        <thead>
            <tr>
                <td>ID</td>
                <td>Department ID</td>
                <td>Employee Number</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Birthdate</td>
                <td class=" flex-row">Contact Number</td>
                <td>Email</td>
                <td class="text-center">Action</td>
                <td>Date Created</td>
                <td>Date Updated</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($employeedata as $employee)
            <x-employees-card :employee="$employee"/>
            @endforeach
        </tbody>
        </table>
    </x-layout>
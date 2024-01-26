@extends('layout')

@section('content')

<div class="container my-5">
    <h1> Create Employee</h1>
    <form method="post">
        <input type="hidden" name="id">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Employee Number</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="first_name" >
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">First Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="first_name" >
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Last Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="last_name">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Birthdate</label>
            <div class="col-sm-6">
                <input type="date" class="form-control" name="birthdate" >
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Contact Number</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="contact_number" >
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="email" >
            </div>
        </div>

        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="/" role="button">Cancel</a>
            </div>
        </div>
    </form>
</div>

@endsection
<x-layout>
    <div class="container my-5 mx-auto">
        <h1> Create Employee</h1>
        <form method="POST" action="/createemployee">
            @csrf
            <input type="hidden" name="id">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Employee Number</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="employee_number" >
                    @error('employee_number')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="first_name" >
                    @error('first_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="last_name">
                    @error('last_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Birthdate</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="birthdate" >
                    @error('birthdate')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Contact Number</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="contact_number" >
                    @error('contact_number')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="email" >
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

            </div>
            <div class="row mb-3">
                <div class="offset-sm-2 col-sm-2 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-1 col-sm-1 d-grid">
                    <a class="btn btn-outline-primary" href="/" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</x-layout>
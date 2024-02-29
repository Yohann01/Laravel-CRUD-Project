<x-layout>
    <div class="container my-5">
        <h1>Login</h1>
        <form method="POST" action="/users/authenticate">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" 
                    value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="password" 
                    value="{{ old('password') }}">
                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            <div class="row mb-3">
                <div class="offset-sm-2 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</x-layout>
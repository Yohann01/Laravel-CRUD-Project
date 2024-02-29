<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     {{-- <!-- jQuery library -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand ms-5" id="title" href="">CRUD Application</a>
        <!-- Nav bar -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-dark" id="collapsibleNavbar">
            <ul class="navbar-nav position-absolute end-0" id="logout">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li> --}}
                @auth
                <li class="nav item ms-auto">
                <form method="POST" action="/logout">
                    @csrf
                    <button class="logout-btn btn btn-dark" type="submit">
                        <i class="bi bi-box-arrow-left"> Logout</i>
                    </button>
                </form>
                </li>
                @endauth
            </ul>
        </div>
    </nav>



    {{-- View Content --}}
    {{$slot}}

    {{-- <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
</body>
</html>
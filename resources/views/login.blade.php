<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Halaman Login
                    </div>
                    <div class="card-body">
                        @if (Session::has('status'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <form action="{{ route('authenticating') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <label for="email" class="form-label">Username</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                        </svg></span>
                                    <input type="text" class="form-control" id="username" name="email" required
                                        placeholder="Masukkan Username" aria-describedby="basic-addon3 basic-addon4">
                                </div>
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-unlock" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2M3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1z" />
                                        </svg></span>
                                    <input type="password" class="form-control" id="password" name="password" required
                                        placeholder="Masukkan Password" aria-describedby="basic-addon3 basic-addon4">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button type="submit" class="form-control btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

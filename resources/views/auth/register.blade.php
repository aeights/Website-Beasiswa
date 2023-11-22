<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("templates/mazer/dist/assets/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("templates/mazer/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css") }}">
    <link rel="stylesheet" href="{{ asset("templates/mazer/dist/assets/css/app.css") }}">
    <link rel="stylesheet" href="{{ asset("templates/mazer/dist/assets/css/pages/auth.css") }}">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="{{ route('landing') }}" class="d-flex"><img src="{{ asset('assets/logo.png') }}" alt="Logo"><h2>Beasiswa</h2></a>
                    </div>
                    <h1 class="auth-title">Daftar</h1>
                    <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                    <form action="{{ route("register.process") }}" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="name" type="text" class="form-control form-control-xl" placeholder="Nama">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="nim" type="number" class="form-control form-control-xl" placeholder="NIM">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="email" type="email" class="form-control form-control-xl" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="phone" type="number" class="form-control form-control-xl" placeholder="Nomor HP">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="password" type="password" class="form-control form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="confirm_password" type="password" class="form-control form-control-xl" placeholder="Confirm Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Daftar</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Sudah Punya Akun? <a href="{{ route('login') }}"
                                class="font-bold">Login</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>

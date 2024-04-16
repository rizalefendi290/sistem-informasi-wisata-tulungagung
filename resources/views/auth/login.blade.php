<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/all.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    @include('component.navbar')
    <br>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Selamat Datang</div>
            <div class="title signup">Form Registrasi</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Daftar</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form method="POST" action="{{ route('login') }}" class="login" id="login">
                    @csrf
                    <div class="field">
                        <input id="email" type="email" placeholder="Masukan Email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="field">
                        <input id="password" type="password" placeholder="Masukan Password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="pass-link">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Lupa password?</a>
                        @endif
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                </form>

                <form method="POST" action="{{ route('register') }}" onsubmit="return validatePassword()"
                    class="signup" id="signup">
                    @csrf
                    <div class="field">
                        <input id="name" type="text" placeholder="Masukan Nama"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>

                    <div class="field">
                        <input id="email" type="email" placeholder="Masukan Email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">
                    </div>

                    <div class="field">
                        <input type="password" id="password" placeholder="Masukan Password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">
                    </div>

                    <div class="field">
                        <input type="password" id="password-confirm" class="form-control"
                            name="password_confirmation" placeholder="Ulangi password" required
                            autocomplete="new-password">
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="{{ __('Register') }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    @include('component.footer')
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const loginText = document.querySelector("title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const daftarBtn = document.querySelector("label.signup");
        const daftarLink = document.querySelector("form.signup-link a");
        daftarBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        daftarLink.onclick = (() => {
            daftarBtn.click();
            return false;
        })

        function validatePassword() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("password-confirmation").value;

            if (password != confirmPassword) {
                alert("Password yang anda masukan tidak sesuai, silahkan isi ulang password!");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>

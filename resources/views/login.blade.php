<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <title>Login Page | CRUD</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="/loginuser" method="post">
                @csrf
                <h1>Registrastion</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button>Sign In</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="/loginproses" method="POST">
                @csrf
                <h1>Log In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email and password</span>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <a>Sudah punya akun?
                    <br>
                    silahkan register =>
                </a>
                <button href='/views/pasien_create.blade.php'>Sign Up</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Silahkan masukkan email dan password anda yang anda buat</p>
                    <button class="hidden" id="login">Sign Up</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hallo!</h1>
                    <p>Silahkan Lakukan Registrasi terlebih dahulu lalu lakukan Login</p>
                    <button class="hidden" id="register">Sign In</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/login.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/loginPageStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <title>Kithara</title>
    <link rel="icon" href="/image/logo/logo.png" type="image">
</head>

<body>
    <div class="vh-100 w-100 d-flex align-items-center" id="mainBgn">
        <div class="formContainer">
            <div class="text-center mb-2">
                <img src="/image/logo/logo.png" alt="Logo Kitharra" style="width:12rem">
            </div>
            <div class="text-center mb-4">
                <h1 style="color:white">Login</h1>
            </div>
            <form>
                <div class="row d-flex justify-content-center">
                    <div class="col-6 justify-content-center">
                        <div>
                            <span class="inputLogo"><i class="fas fa-lock"></i></span><input type="text" class="form-control rounded-pill" name="email" placeholder="Insert Your Email">
                        </div>
                        <div class="my-2">
                            <span class="inputLogo"><i class="fas fa-key"></i></span><input type="password" class="form-control rounded-pill" name="password" placeholder="Insert Your Password">
                        </div>
                        <button class="btn btn-accent rounded-pill w-100" type="submit"><span class="login-text">Login</span></button>
                    </div>
                </div>
            </form>
            <div class="text-center mt-4 pb-4 signup-text">
                Don't have an account? <a href="{{ route('register') }}" class="signup-button">Sign Up</a>
            </div>
        </div>
    </div>
</body>

</html>
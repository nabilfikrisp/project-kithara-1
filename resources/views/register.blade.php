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
    <div class="w-100 d-flex align-items-center" id="mainBgn">
        <div class="formContainer">
            <div class="text-center mb-2">
                <img src="/image/logo/logo.png" alt="Logo Kitharra" style="width:12rem">
            </div>
            <div class="text-center mb-4">
                <h1 style="color:white">Register</h1>
            </div>
            <form>
                <div class="row d-flex">
                    <div class="my-2">
                        <span class="inputLogo"></span><input type="email" class="form-control rounded-pill" name="email" placeholder="Insert Your Email">
                    </div>
                    <div class="my-2">
                        <span class="inputLogo"></span><input type="text" class="form-control rounded-pill" name="name" placeholder="Insert Your Name">
                    </div>
                    <div class="my-2">
                        <span class="inputLogo"></span><input type="number" class="form-control rounded-pill" name="phoneNumber" placeholder="Insert Your Phone Number">
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="my-2">
                                    <span class="inputLogo"></span><input type="text" class="form-control rounded-pill" name="negara" placeholder="Insert Your Country">
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-2">
                                    <span class="inputLogo"></span><input type="text" class="form-control rounded-pill" name="kota" placeholder="Insert Your City">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="my-2">
                                    <span class="inputLogo"></span><input type="text" class="form-control rounded-pill" name="kecamatan" placeholder="Insert Your Kecamatan">
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-2">
                                    <span class="inputLogo"></span><input type="text" class="form-control rounded-pill" name="kelurahan" placeholder="Insert Your Kelurahan">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="my-2">
                                    <span class="inputLogo"></span><input type="text" class="form-control rounded-pill" name="alamat" placeholder="Insert Your Address">
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-2">
                                    <span class="inputLogo"></span><input type="text" class="form-control rounded-pill" name="kodePos" placeholder="Insert Your Post Code">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-2">
                        <span class="inputLogo"></span><input type="password" class="form-control rounded-pill" name="password" placeholder="Insert Your Password">
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-accent rounded-pill" type="submit"><span class="login-text">Sign Up</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
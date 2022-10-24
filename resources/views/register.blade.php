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
            <form action="/register" method="POST">
                @csrf
                <div class="row d-flex">
                    <div class="my-2">
                        <span class="inputLogo"></span><input type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" placeholder="Insert Your Email" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="my-2">
                        <span class="inputLogo"></span><input type="text" class="form-control rounded-pill @error('name') is-invalid @enderror" name="name" placeholder="Insert Your Name" value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="my-2">
                        <span class="inputLogo"></span><input type="tel" class="form-control rounded-pill @error('no_hp') is-invalid @enderror" name="no_hp" placeholder="Insert Your Phone Number" value="{{ old('no_hp') }}">
                        @error('no_hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="my-2">
                                    <span class="inputLogo"></span><input type="text" class="form-control rounded-pill @error('negara') is-invalid @enderror" name="negara" placeholder="Insert Your Country" value="{{ old('negara') }}">
                                    @error('negara')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-2">
                                    <span class="inputLogo"></span><input type="text" class="form-control rounded-pill @error('kota') is-invalid @enderror" name="kota" placeholder="Insert Your City" value="{{ old('kota') }}">
                                    @error('kota')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="my-2">
                                    <span class="inputLogo"></span><input type="text" class="form-control rounded-pill @error('kecamatan') is-invalid @enderror" name="kecamatan" placeholder="Insert Your Kecamatan" value="{{ old('kecamatan') }}">
                                    @error('kecamatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-2">
                                    <span class="inputLogo"></span><input type="text" class="form-control rounded-pill @error('kelurahan') is-invalid @enderror" name="kelurahan" placeholder="Insert Your Kelurahan" value="{{ old('kelurahan') }}">
                                    @error('kelurahan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="my-2">
                                    <span class="inputLogo"></span><input type="text" class="form-control rounded-pill @error('alamat') is-invalid @enderror" name="alamat" placeholder="Insert Your Address" value="{{ old('alamat') }}">
                                    @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-2">
                                    <span class="inputLogo"></span><input type="text" class="form-control rounded-pill @error('kode_pos') is-invalid @enderror" name="kode_pos" placeholder="Insert Your Post Code" value="{{ old('kode_pos') }}">
                                    @error('kode_pos')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-2">
                        <span class="inputLogo"></span><input type="password" class="form-control rounded-pill @error('kode_pos') is-invalid @enderror" name="password" placeholder="Insert Your Password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-accent rounded-pill" type="submit"><span class="login-text">Sign
                                Up</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
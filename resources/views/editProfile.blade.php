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
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" style="width: 50%; margin: 0 auto"
                role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="/profile/edit" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="row d-flex">

                    <div class="my-2">
                        <label for="name" class="text-white m-2">Nama</label>
                        <span class="inputLogo"></span><input type="text"
                            class="form-control rounded-pill @error('name') is-invalid @enderror" name="name"
                            placeholder="Insert Your Name" value="{{ $user->name }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="my-2">
                        <label for="no_hp" class="text-white m-2">Nomor Telepon</label>
                        <span class="inputLogo"></span><input type="tel"
                            class="form-control rounded-pill @error('no_hp') is-invalid @enderror" name="no_hp"
                            placeholder="Insert Your Phone Number" value="{{ $user->no_hp }}">
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
                                    <label for="negara" class="text-white m-2">Negara</label>
                                    <span class="inputLogo"></span><input type="text"
                                        class="form-control rounded-pill @error('negara') is-invalid @enderror"
                                        name="negara" placeholder="Insert Your Country" value="{{ $user->negara }}">
                                    @error('negara')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-2">
                                    <label for="kota" class="text-white m-2">Kota</label>
                                    <span class="inputLogo"></span><input type="text"
                                        class="form-control rounded-pill @error('kota') is-invalid @enderror"
                                        name="kota" placeholder="Insert Your City" value="{{ $user->kota }}">
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
                                <label for="kecamatan" class="text-white m-2">Kecamatan</label>
                                <div class="my-2">
                                    <span class="inputLogo"></span><input type="text"
                                        class="form-control rounded-pill @error('kecamatan') is-invalid @enderror"
                                        name="kecamatan" placeholder="Insert Your Kecamatan"
                                        value="{{ $user->kecamatan }}">
                                    @error('kecamatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-2">
                                    <label for="kelurahan" class="text-white m-2">Kelurahan</label>
                                    <span class="inputLogo"></span><input type="text"
                                        class="form-control rounded-pill @error('kelurahan') is-invalid @enderror"
                                        name="kelurahan" placeholder="Insert Your Kelurahan"
                                        value="{{ $user->kelurahan }}">
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
                                    <label for="alamat" class="text-white m-2">Alamat</label>
                                    <span class="inputLogo"></span><input type="text"
                                        class="form-control rounded-pill @error('alamat') is-invalid @enderror"
                                        name="alamat" placeholder="Insert Your Address"
                                        value="{{ $user->alamat }}">
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-2">
                                    <label for="kode_pos" class="text-white m-2">Kode Pos</label>
                                    <span class="inputLogo"></span><input type="text"
                                        class="form-control rounded-pill @error('kode_pos') is-invalid @enderror"
                                        name="kode_pos" placeholder="Insert Your Post Code"
                                        value="{{ $user->kode_pos }}">
                                    @error('kode_pos')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="my-2">
                      <label for="password" class="text-white m-2">Ganti Password</label>
                        <span class="inputLogo"></span><input type="password"
                            class="form-control rounded-pill @error('password') is-invalid @enderror" name="password"
                            placeholder="*****" value="{{ $user->password }}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}

                    <div class="text-center mt-4">
                        <button class="btn btn-accent rounded-pill" type="submit"><span
                                class="login-text">Update</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>

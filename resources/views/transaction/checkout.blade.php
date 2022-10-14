@extends('layout')

@section('head')
<title>Checkout</title>
<link rel="stylesheet" href="{{ asset('/css/checkoutPageStyle.css') }}">
@endsection

@section('content')
<div class="container-fluid mt-4 mb-4">
    <div class="row w-100 align-items-center justify-content-center">
        <div class="col-6 img-banner d-flex justify-content-center mt-5">
            <img src="/image/logo/logo.png" alt="Logo Kitharra">
        </div>
    </div>
    <div class="row align-items-center justify-content-center">
        <h1 class="text-center" style="color:white">Checkout</h1>
    </div>
    <div class="row align-items-center justify-content-center mt-3">
        <form>
            <div class="col d-flex justify-content-center">
                <div class="card card-checkout">
                    <div class="row justify-content-center p-2">
                        <div class="col mt-2 mb-2" id="identity">
                            <h4 class="text-center">Identitas Customer</h4>
                            <div class="row p-1" style="margin-left:1rem;margin-right:1rem">
                                <label for="name">Nama</label>
                                <input type="text" id="name" name="name" value="NAMA LO" disabled>
                            </div>
                            <div class="row p-1" style="margin-left:1rem;margin-right:1rem">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="EMAIL LO" disabled>
                            </div>
                            <div class="row p-1" style="margin-left:1rem;margin-right:1rem">
                                <label for="noHP">Nomor HP</label>
                                <input type="number" id="noHP" name="noHP">
                            </div>
                            <div class="row mt-3 justify-content-center">
                                <button type="button" class="btn btn-primary" style="width:fit-content" onclick="return nextToOrder()">Next</button>
                            </div>
                        </div>
                        <div class="col mt-2 mb-2" id="order" hidden>
                            <h4 class="text-center">Detil Pesanan</h4>
                            <div class="row p-1" style="margin-left:1rem;margin-right:1rem">
                                <label for="merkGitar">Merk Gitar</label>
                                <input type="text" id="merkGitar" name="merkGitar">
                            </div>
                            <div class="row p-1" style="margin-left:1rem;margin-right:1rem">
                                <label for="tipeGitar">Tipe Gitar</label>
                                <input type="text" id="tipeGitar" name="tipeGitar">
                            </div>
                            <div class="row p-1" style="margin-left:1rem;margin-right:1rem">
                                <label>Delivery By</label>
                                <label><input type="radio" id="deliveryBy" name="deliveryBy" value="Kurir">Kurir</label>
                                <label><input type="radio" id="deliveryBy" name="deliveryBy" value="Sendiri">Sendiri</label>
                            </div>
                            <div class="row mt-3 justify-content-center">
                                <button type="button" class="btn btn-primary m-2" style="width:fit-content" onclick="return backToIdentity()">Back</button>
                                <button type="button" class="btn btn-primary m-2" style="width:fit-content" onclick="return nextToPayment()">Next</button>
                            </div>
                        </div>
                        <div class="col mt-2 mb-2" id="payment" hidden>
                            <h4 class="text-center">Detil Pembayaran</h4>
                            <div class="row mt-3 justify-content-center" style="margin-left:1rem;margin-right:1rem">
                                <label for="harga">harga</label>
                                <input type="text" id="harga" name="harga" value="50000" disabled>
                            </div>
                            <div class="row mt-3 justify-content-center" style="margin-left:1rem;margin-right:1rem">
                                <label>Metode Pembayaran</label>
                                <label><input type="radio" id="deliveryBy" name="deliveryBy" value="transfer" onclick="showRekening(this)">Bank Transfer</label>
                                <p id="Rekening" style="display:none">Bank BCA 88888888 an Juancok</p>
                                <label><input type="radio" id="deliveryBy" name="deliveryBy" value="cash" onclick="showCash(this)">Cash</label>
                                <p id="Cash" style="display:none">Bayar sendiri ke toko anjeng</p>
                            </div>
                            <div class="row mt-3 justify-content-center">
                                <button type="button" class="btn btn-primary m-2" style="width:fit-content" onclick="return backToOrder()">Back</button>
                                <button type="submit" class="btn btn-primary m-2" style="width:fit-content">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    const nextToOrder = () => {
        setTimeout(() => {
            setTimeout(() => {
                document
                    .getElementById("identity")
                    .setAttribute("hidden", "true");
                document
                    .getElementById("order")
                    .removeAttribute("hidden");
            }, 150);
        }, 50);
    };

    const nextToPayment = () => {
        setTimeout(() => {
            setTimeout(() => {
                document
                    .getElementById("order")
                    .setAttribute("hidden", "true");
                document
                    .getElementById("payment")
                    .removeAttribute("hidden");
            }, 150);
        }, 50);
    };

    const backToIdentity = () => {
        setTimeout(() => {
            setTimeout(() => {
                document
                    .getElementById("identity")
                    .removeAttribute("hidden");
                document
                    .getElementById("order")
                    .setAttribute("hidden", "true");
            }, 150);
        }, 50);
    };

    const backToOrder = () => {
        setTimeout(() => {
            setTimeout(() => {
                document
                    .getElementById("order")
                    .removeAttribute("hidden");
                document
                    .getElementById("payment")
                    .setAttribute("hidden", "true");
            }, 150);
        }, 50);
    };

    rekening = document.getElementById('Rekening');
    cash = document.getElementById('Cash');

    function showRekening(radioTicked) {
        if (radioTicked.checked) {
            rekening.style.display = 'block'
        } else {
            rekening.style.display = 'none'
        }
    }

    function showCash(radioTicked) {
        if (radioTicked.checked) {
            cash.style.display = 'block'
        } else {
            cash.style.display = 'none'
        }
    }
</script>
@endsection
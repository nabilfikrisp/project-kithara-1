@extends('admin.adminLayout')

@section('head')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <h3 class="text-center">Edit Data Order [id = {{ $orders->id }}]</h3>
        <div class="col d-flex justify-content-center">
            <div class="card w-75 mt-3 mb-3" style="border:1px solid black">
                <form>
                    <div class="row d-flex justify-content-center mt-4 mb-4">
                        <div class="col-4 justify-content-center m-0">
                            <h4 class="text-center">Info Customer</h4>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="name">Nama</label>
                                <input type="text" id="name" name="name" value="{{ $orders->buyers->name }}" disabled>
                            </div>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="{{ $orders->buyers->email }}" disabled>
                            </div>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="noHP">Nomor HP</label>
                                <input type="text" id="noHP" name="noHP" value="{{ $orders->buyers->no_hp }}" disabled>
                            </div>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="alamat">Alamat</label>
                                <textarea type="text" id="alamat" name="alamat" disabled>{{ $orders->buyers->alamat }}, {{ $orders->buyers->kelurahan }}, {{ $orders->buyers->kecamatan }}, {{ $orders->buyers->kota }}, {{ $orders->buyers->negara }}, {{ $orders->buyers->kode_pos }}</textarea>
                            </div>
                        </div>
                        <div class="col-4 justify-content-center m-0">
                            <h4 class="text-center">Info Order</h4>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="part">Part</label>
                                <input type="text" id="part" name="part" value="{{ $orders->services->part }}" disabled>
                            </div>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="service">Service</label>
                                <input type="text" id="service" name="service" value="{{ $orders->services->service_name }}" disabled>
                            </div>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="merkGitar">Merk Gitar</label>
                                <input type="text" id="merkGitar" name="merkGitar" value="{{ $orders->merk_gitar }}" disabled>
                            </div>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="tipeGitar">Tipe Gitar</label>
                                <input type="text" id="tipeGitar" name="tipeGitar" value="{{ $orders->tipe_gitar }}" disabled>
                            </div>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="deliveryBy">Delivery By</label>
                                <input type="text" id="deliveryBy" name="deliveryBy" value="{{ $orders->delivery_by }}" disabled>
                            </div>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="pickupBy">Pickup By</label>
                                <input type="text" id="pickupBy" name="pickupBy" value="{{ $orders->pickup_by }}" disabled>
                            </div>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="paymentType">Payment Type</label>
                                <input type="text" id="paymentType" name="paymentType" value="{{ $orders->payment_type }}" disabled>
                            </div>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                @if($orders->payment_type === 'cash')
                                @if($orders->bukti_bayar == null)
                                <label for="buktiBayar">Upload Bukti Bayar</label>
                                <input type="file" id="buktiBayar" name="buktiBayar" value="{{ $orders->bukti_bayar }}">
                                @else
                                <a href="">Lihat Bukti Bayar</a>
                                <label for="buktiBayar">Edit Bukti Bayar</label>
                                <input type="file" id="buktiBayar" name="buktiBayar" value="{{ $orders->bukti_bayar }}">
                                @endif
                                @else
                                <p>Bukti Bayar</p>
                                <a href="{{ $orders->bukti_bayar }}">Lihat Disini</a>
                                @endif
                            </div>
                        </div>
                        <div class="col-4 justify-content-center m-0">
                            <h4 class="text-center">Info Order</h4>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="noResi">No Resi</label>
                                <input type="text" id="noResi" name="noResi" value="{{ $orders->no_resi }}" disabled>
                            </div>
                            <div class="row p-1" style="margin-left:1rem;margin-right:1rem; width:80%">
                                <label for="status">Status</label>
                                <select id="status" name="status">
                                    <option value="Menunggu Konfirmasi Bukti Bayar" @if( $orders->status == 'Menunggu Konfirmasi Bukti Bayar') selected @endif>Menunggu Konfirmasi Bukti Bayar</option>
                                    <option value="Menunggu Gitar" @if( $orders->status == 'Menunggu Gitar') selected @endif>Menunggu Gitar</option>
                                    <option value="Gitar Diproses" @if( $orders->status == 'Gitar Diproses') selected @endif>Gitar Diproses</option>
                                    <option value="Reparasi Gitar Selesai" @if( $orders->status == 'Reparasi Gitar Selesai') selected @endif>Reparasi Gitar Selesai</option>
                                </select>
                            </div>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="resiCreated">Waktu Order</label>
                                <input type="text" id="resiCreated" name="resiCreated" value="{{ $orders->created_at }}" disabled>
                            </div>
                            <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                <label for="estimasiWaktu">Estimasi Waktu (Only Repair)</label>
                                <input type="text" id="estimasiWaktu" name="estimasiWaktu" value="{{ $orders->services->estimasi_waktu }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center mt-4 mb-4">
                        <div class="col justify-content-center text-center">
                            <button type="submit" class="btn btn-primary m-2">Update Order Ini</button>
                            <button type="button" class="btn btn-danger m-2">Delete Order Ini</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
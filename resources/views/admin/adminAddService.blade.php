@extends('admin.adminLayout')

@section('head')
@endsection

@section('content')
    <div class="container" style="padding-left: 5vw; width: 50vw">
        <form method="POST" action="/admin/service/add">
            @csrf
            <h1>Add Service Form</h1>
            <div class="my-3">
                <label for="part" class="form-label">Part</label>
                <select class="form-select" aria-label="Default select example" name="part" required>
                    <option value="" selected>Pilih Part</option>
                    <option value="head">Head</option>
                    <option value="neck">Neck</option>
                    <option value="body">Body</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="service_name" class="form-label">Service Name</label>
                <input type="text" class="form-control" id="service_name" name="service_name" required>
            </div>
            <div class="mb-3">
                <label for="estimasi_waktu" class="form-label">Estimasi Waktu (hari)</label>
                <input type="number" class="form-control" id="estimasi_waktu" name="estimasi_waktu" required>
            </div>
            <div class="mb-3">
                <label for="biaya" class="form-label">Biaya</label>
                <input type="number" class="form-control" id="biaya" name="biaya" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

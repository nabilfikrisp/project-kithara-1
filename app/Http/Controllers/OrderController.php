<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use sirajcse\UniqueIdGenerator\UniqueIdGenerator as UniqueIdGenerator;

class OrderController extends Controller
{
    public function checkout()
    {
        // dd(session()->get('repHead'));
        return view('transaction.checkout', [
            'repHead' => session()->get('repHead'),
            'repNut' => session()->get('repNut'),
            'repTuningMachine' => session()->get('repTuningMachine'),
        ]);
    }

    public function handleOrder(Request $request)
    {
        if (!isset($request->repHead) && !isset($request->repNut) && !isset($request->repTuningMachine)) {
            return back()->with([
                'error' => 'Mohon pilih salah satu pesanan'
            ]);
        }

        $repHead = isset($request->repHead) ? $request->repHead : '';
        $repNut = isset($request->repNut) ? $request->repNut : '';
        $repTuningMachine = isset($request->repTuningMachine) ? $request->repTuningMachine : '';
        $repBlabla = '';
        return redirect('/checkout')->with([
            'repHead' => $repHead,
            'repNut' => $repNut,
            'repTuningMachine' => $repTuningMachine,
        ]);
    }

    public function handleCheckout(Request $request)
    {
        // dd($request->file('buktiBayar')->getClientOriginalName());
        if ($request['merkGitar'] == null || $request['tipeGitar'] == null || $request['deliveryBy'] == null || $request['pickupBy'] == null) {
            return back()->with([
                'error' => 'Mohon isi informasi order dengan lengkap'
            ]);
        }
        $no_resi = UniqueIdGenerator::generate([
            'table' => 'orders',
            'field' => 'no_resi',
            'length' => 7,
            'prefix' => 'KIT'
        ]);

        // $request['no_resi'] = $no_resi;
        $request['status'] = 'Menunggu Konfirmasi Bukti Bayar';
        // $service = Service::where('service_name', $request['repHead'])->first();
        // $request['service_id'] = $service->id;
        // dd($request, $no_resi, $service);

        if ($request['repHead'] != null) {
            $service = Service::where('service_name', $request['repHead'])->first();
            $service_id = $service->id;
            $bukti_bayar = null;
            if ($request->file('buktiBayar') !== null) {
                $bukti_bayar = $request->file('buktiBayar')->store('bukti-bayar');
            }
            $order = Order::create([
                'status' => $request['status'],
                'total_harga' => $request['harga'],
                'user_id' => auth()->user()->id,
                'service_id' => $service_id,
                'merk_gitar' => $request['merkGitar'],
                'tipe_gitar' => $request['tipeGitar'],
                'delivery_by' => $request['deliveryBy'],
                'pickup_by' => $request['pickupBy'],
                'payment_type' => $request['paymentMethod'],
                'bukti_bayar' => $bukti_bayar,
                'no_resi' => $no_resi
            ]);
        }

        if ($request['repNut'] != null) {
            $service = Service::where('service_name', $request['repNut'])->first();
            $service_id = $service->id;
            $bukti_bayar = null;
            if ($request->file('buktiBayar') !== null) {
                $bukti_bayar = $request->file('buktiBayar')->store('bukti-bayar');
            }
            $order = Order::create([
                'status' => $request['status'],
                'total_harga' => $request['harga'],
                'user_id' => auth()->user()->id,
                'service_id' => $service_id,
                'merk_gitar' => $request['merkGitar'],
                'tipe_gitar' => $request['tipeGitar'],
                'delivery_by' => $request['deliveryBy'],
                'pickup_by' => $request['pickupBy'],
                'payment_type' => $request['paymentMethod'],
                'bukti_bayar' => $bukti_bayar,
                'no_resi' => $no_resi
            ]);
            
        }

        if ($request['repTuningMachine'] != null) {
            $service = Service::where('service_name', $request['repTuningMachine'])->first();
            $service_id = $service->id;
            $bukti_bayar = null;
            if ($request->file('buktiBayar') !== null) {
                $bukti_bayar = $request->file('buktiBayar')->store('bukti-bayar');
            }
            $order = Order::create([
                'status' => $request['status'],
                'total_harga' => $request['harga'],
                'user_id' => auth()->user()->id,
                'service_id' => $service_id,
                'merk_gitar' => $request['merkGitar'],
                'tipe_gitar' => $request['tipeGitar'],
                'delivery_by' => $request['deliveryBy'],
                'pickup_by' => $request['pickupBy'],
                'payment_type' => $request['paymentMethod'],
                'bukti_bayar' => $bukti_bayar,
                'no_resi' => $no_resi
            ]);
        }

        return redirect('/home')->with([
            'success' => 'Order Behasil, Silahkan Tunggu Konfirmasi',
        ]);
    }
}

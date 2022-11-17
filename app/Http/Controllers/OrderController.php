<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\StatusLog;
use Illuminate\Http\Request;
use sirajcse\UniqueIdGenerator\UniqueIdGenerator as UniqueIdGenerator;

class OrderController extends Controller
{


    public function checkoutAll()
    {
        $harga = 0;
        if (session()->get('services')) {
            $services = session()->get('services');
            foreach ($services as $id) {
                $service = Service::where('id', $id)->first();
                $harga += $service->biaya;
            }
        }
        // dd($services);
        // dd($harga);
        return view('transaction.checkout', [
            'servicesId' => $services,
            'biaya' => $harga
        ]);
    }


    public function handleOrderAll(Request $request)
    {

        if (!$request->services) {
            return back()->with([
                'error' => 'Mohon pilih salah satu pesanan'
            ]);
        }
        
        return redirect('/checkout')->with([
            'services' => $request->services
        ]);
    }

    public function handleCheckout(Request $request)
    {
        // dd($request->servicesId);
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

        $request['status'] = 'Menunggu Konfirmasi Bukti Bayar';

        if ($request->servicesId) {
            foreach ($request->servicesId as $id) {
                $service = Service::where('id', $id)->first();
                // dd($service);
                $bukti_bayar = null;
                if ($request->file('buktiBayar') !== null) {
                    $bukti_bayar = $request->file('buktiBayar')->store('bukti-bayar');
                }
                $order = Order::create([
                    'status' => $request['status'],
                    'total_harga' => $request['harga'],
                    'user_id' => auth()->user()->id,
                    'service_id' => $service->id,
                    'merk_gitar' => $request['merkGitar'],
                    'tipe_gitar' => $request['tipeGitar'],
                    'delivery_by' => $request['deliveryBy'],
                    'pickup_by' => $request['pickupBy'],
                    'payment_type' => $request['paymentMethod'],
                    'bukti_bayar' => $bukti_bayar,
                    'no_resi' => $no_resi
                ]);
            }
        }
    
        $statusLog = StatusLog::create([
            'status' => 'Menunggu Konfirmasi Bukti Bayar',
            'no_resi' => $no_resi
        ]);

        $orders = Order::where('no_resi', $no_resi)->get();
        return view('transaction.orderBerhasil', [
            'orders' => $orders
        ]);
    }
}

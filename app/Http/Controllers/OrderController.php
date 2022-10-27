<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\StatusLog;
use Illuminate\Http\Request;
use sirajcse\UniqueIdGenerator\UniqueIdGenerator as UniqueIdGenerator;

class OrderController extends Controller
{
    // public function checkout()
    // {
    //     // dd(session()->get('repHead'));
    //     $repHead = "";
    //     $repNut = "";
    //     $repTuningMachine = "";
    //     $harga = 0;
    //     if (session()->get('repHead') != "") {
    //         $repHead = Service::where('service_name', session()->get('repHead'))->first();
    //         $harga += $repHead->biaya;
    //     }
    //     if (session()->get('repNut') != "") {
    //         $repNut = Service::where('service_name', session()->get('repNut'))->first();
    //         $harga += $repNut->biaya;
    //     }
    //     if (session()->get('repTuningMachine') != "") {
    //         $repTuningMachine = Service::where('service_name', session()->get('repTuningMachine'))->first();
    //         $harga += $repTuningMachine->biaya;
    //     }

    //     // dd($repHead, $repHead, $repTuningMachine);

    //     // dd($harga);

    //     return view('transaction.checkout', [
    //         'repHead' => session()->get('repHead'),
    //         'repNut' => session()->get('repNut'),
    //         'repTuningMachine' => session()->get('repTuningMachine'),
    //         'biaya' => $harga
    //     ]);
    // }

    // public function checkoutNeck()
    // {
    //     $repNeck = "";
    //     $repFret = "";
    //     $repPickup = "";
    //     $harga = 0;
    //     if (session()->get('repNeck') != "") {
    //         $repNeck = Service::where('service_name', session()->get('repNeck'))->first();
    //         $harga += $repNeck->biaya;
    //     }
    //     if (session()->get('repFret') != "") {
    //         $repFret = Service::where('service_name', session()->get('repFret'))->first();
    //         $harga += $repFret->biaya;
    //     }
    //     if (session()->get('repPickup') != "") {
    //         $repPickup = Service::where('service_name', session()->get('repPickup'))->first();
    //         $harga += $repPickup->biaya;
    //     }
    //     // dd(session()->get('repNeck'));
    //     return view('transaction.checkout', [
    //         'repNeck' => session()->get('repNeck'),
    //         'repFret' => session()->get('repFret'),
    //         'repPickup' => session()->get('repPickup'),
    //         'biaya' => $harga
    //     ]);
    // }

    // public function checkoutBody()
    // {
    //     $repBody = "";
    //     $repSaddle = "";
    //     $repBridge = "";
    //     $repPin = "";
    //     $harga = 0;
    //     if (session()->get('repBody') != "") {
    //         $repBody = Service::where('service_name', session()->get('repBody'))->first();
    //         $harga += $repBody->biaya;
    //     }
    //     if (session()->get('repSaddle') != "") {
    //         $repSaddle = Service::where('service_name', session()->get('repSaddle'))->first();
    //         $harga += $repSaddle->biaya;
    //     }
    //     if (session()->get('repBridge') != "") {
    //         $repBridge = Service::where('service_name', session()->get('repBridge'))->first();
    //         $harga += $repBridge->biaya;
    //     }
    //     if (session()->get('repPin') != "") {
    //         $repPin = Service::where('service_name', session()->get('repPin'))->first();
    //         $harga += $repPin->biaya;
    //     }
    //     // dd(session()->get('repBody'));
    //     return view('transaction.checkout', [
    //         'repBody' => session()->get('repBody'),
    //         'repSaddle' => session()->get('repSaddle'),
    //         'repBridge' => session()->get('repBridge'),
    //         'repPin' => session()->get('repPin'),
    //         'biaya' => $harga
    //     ]);
    // }

    public function checkoutAll()
    {
        // dd(session()->get('repHead'));
        $repHead = "";
        $repNut = "";
        $repTuningMachine = "";
        $repNeck = "";
        $repFret = "";
        $repPickup = "";
        $repBody = "";
        $repSaddle = "";
        $repBridge = "";
        $repPin = "";
        $harga = 0;
        if (session()->get('repHead') != "") {
            $repHead = Service::where('service_name', session()->get('repHead'))->first();
            $harga += $repHead->biaya;
        }
        if (session()->get('repNut') != "") {
            $repNut = Service::where('service_name', session()->get('repNut'))->first();
            $harga += $repNut->biaya;
        }
        if (session()->get('repTuningMachine') != "") {
            $repTuningMachine = Service::where('service_name', session()->get('repTuningMachine'))->first();
            $harga += $repTuningMachine->biaya;
        }
        if (session()->get('repNeck') != "") {
            $repNeck = Service::where('service_name', session()->get('repNeck'))->first();
            $harga += $repNeck->biaya;
        }
        if (session()->get('repFret') != "") {
            $repFret = Service::where('service_name', session()->get('repFret'))->first();
            $harga += $repFret->biaya;
        }
        if (session()->get('repPickup') != "") {
            $repPickup = Service::where('service_name', session()->get('repPickup'))->first();
            $harga += $repPickup->biaya;
        }
        if (session()->get('repBody') != "") {
            $repBody = Service::where('service_name', session()->get('repBody'))->first();
            $harga += $repBody->biaya;
        }
        if (session()->get('repSaddle') != "") {
            $repSaddle = Service::where('service_name', session()->get('repSaddle'))->first();
            $harga += $repSaddle->biaya;
        }
        if (session()->get('repBridge') != "") {
            $repBridge = Service::where('service_name', session()->get('repBridge'))->first();
            $harga += $repBridge->biaya;
        }
        if (session()->get('repPin') != "") {
            $repPin = Service::where('service_name', session()->get('repPin'))->first();
            $harga += $repPin->biaya;
        }

        // dd($repHead, $repHead, $repTuningMachine);

        // dd($harga);
        return view('transaction.checkout', [
            'repHead' => session()->get('repHead'),
            'repNut' => session()->get('repNut'),
            'repTuningMachine' => session()->get('repTuningMachine'),
            'repNeck' => session()->get('repNeck'),
            'repFret' => session()->get('repFret'),
            'repPickup' => session()->get('repPickup'),
            'repBody' => session()->get('repBody'),
            'repSaddle' => session()->get('repSaddle'),
            'repBridge' => session()->get('repBridge'),
            'repPin' => session()->get('repPin'),
            'biaya' => $harga
        ]);
    }

    // public function handleOrder(Request $request)
    // {
    //     if (!isset($request->repHead) && !isset($request->repNut) && !isset($request->repTuningMachine)) {
    //         return back()->with([
    //             'error' => 'Mohon pilih salah satu pesanan'
    //         ]);
    //     }

    //     $repHead = isset($request->repHead) ? $request->repHead : '';
    //     $repNut = isset($request->repNut) ? $request->repNut : '';
    //     $repTuningMachine = isset($request->repTuningMachine) ? $request->repTuningMachine : '';
    //     return redirect('/checkout')->with([
    //         'repHead' => $repHead,
    //         'repNut' => $repNut,
    //         'repTuningMachine' => $repTuningMachine,
    //     ]);
    // }

    // public function handleOrderNeck(Request $request)
    // {
    //     if (!isset($request->repNeck) && !isset($request->repFret) && !isset($request->repPickup)) {
    //         return back()->with([
    //             'error' => 'Mohon pilih salah satu pesanan'
    //         ]);
    //     }

    //     $repNeck = isset($request->repNeck) ? $request->repNeck : '';
    //     $repFret = isset($request->repFret) ? $request->repFret : '';
    //     $repPickup = isset($request->repPickup) ? $request->repPickup : '';
    //     return redirect('/checkout-neck')->with([
    //         'repNeck' => $repNeck,
    //         'repFret' => $repFret,
    //         'repPickup' => $repPickup,
    //     ]);
    // }


    // public function handleOrderBody(Request $request)
    // {
    //     // dd($request);
    //     if (!isset($request->repBody) && !isset($request->repSaddle) && !isset($request->repBridge) && !isset($request->repPin)) {
    //         return back()->with([
    //             'error' => 'Mohon pilih salah satu pesanan'
    //         ]);
    //     }

    //     $repBody = isset($request->repBody) ? $request->repBody : '';
    //     $repSaddle = isset($request->repSaddle) ? $request->repSaddle : '';
    //     $repBridge = isset($request->repBridge) ? $request->repBridge : '';
    //     $repPin = isset($request->repPin) ? $request->repPin : '';
    //     return redirect('/checkout-body')->with([
    //         'repBody' => $repBody,
    //         'repSaddle' => $repSaddle,
    //         'repBridge' => $repBridge,
    //         'repPin' => $repPin,
    //     ]);
    // }

    public function handleOrderAll(Request $request)
    {
        if (!isset($request->repHead) && !isset($request->repNut) && !isset($request->repTuningMachine) && !isset($request->repNeck) && !isset($request->repFret) && !isset($request->repPickup) && !isset($request->repBody) && !isset($request->repSaddle) && !isset($request->repBridge) && !isset($request->repPin)) {
            return back()->with([
                'error' => 'Mohon pilih salah satu pesanan'
            ]);
        }

        $repHead = isset($request->repHead) ? $request->repHead : '';
        $repNut = isset($request->repNut) ? $request->repNut : '';
        $repTuningMachine = isset($request->repTuningMachine) ? $request->repTuningMachine : '';
        $repNeck = isset($request->repNeck) ? $request->repNeck : '';
        $repFret = isset($request->repFret) ? $request->repFret : '';
        $repPickup = isset($request->repPickup) ? $request->repPickup : '';
        $repBody = isset($request->repBody) ? $request->repBody : '';
        $repSaddle = isset($request->repSaddle) ? $request->repSaddle : '';
        $repBridge = isset($request->repBridge) ? $request->repBridge : '';
        $repPin = isset($request->repPin) ? $request->repPin : '';
        return redirect('/checkout')->with([
            'repHead' => $repHead,
            'repNut' => $repNut,
            'repTuningMachine' => $repTuningMachine,
            'repNeck' => $repNeck,
            'repFret' => $repFret,
            'repPickup' => $repPickup,
            'repBody' => $repBody,
            'repSaddle' => $repSaddle,
            'repBridge' => $repBridge,
            'repPin' => $repPin,
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

        if ($request['repNeck'] != null) {
            $service = Service::where('service_name', $request['repNeck'])->first();
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

        if ($request['repFret'] != null) {
            $service = Service::where('service_name', $request['repFret'])->first();
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

        if ($request['repPickup'] != null) {
            $service = Service::where('service_name', $request['repPickup'])->first();
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

        if ($request['repBody'] != null) {
            $service = Service::where('service_name', $request['repBody'])->first();
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

        if ($request['repSaddle'] != null) {
            $service = Service::where('service_name', $request['repSaddle'])->first();
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

        if ($request['repBridge'] != null) {
            $service = Service::where('service_name', $request['repBridge'])->first();
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

        if ($request['repPin'] != null) {
            $service = Service::where('service_name', $request['repPin'])->first();
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

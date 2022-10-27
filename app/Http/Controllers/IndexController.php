<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\StatusLog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function visitLanding()
    {
        $products = Product::all();
        return view('home', [
            'products' => $products,
        ]);
    }

    public function visitCekResi()
    {
        return view('transaction.cekResi');
    }

    public function handleCekResi(Request $request)
    {   
        // dd(Order::where('no_resi', $request['no_resi'])->count());
        if(Order::where('no_resi', $request['no_resi'])->count() == 0)
        {
            return redirect('/cek-resi')->with([
                'error' => 'Tidak ada order dengan nomor resi tersebut'
            ]);
        }
        $orders = Order::where('no_resi', $request['no_resi'])->get();
        // dd($request->request->get('no_resi'));
        // if ($request->request->get('no_resi') != $orders->no_resi) {
        //     abort(403);
        // }
        $estimasiWaktu = 0;
        foreach($orders as $order)
        {
            $estimasiWaktu += $order->services->estimasi_waktu;
        }
        $statusLogs = StatusLog::where('no_resi', $request['no_resi'])->get();
        return view('transaction.hasilCekResi', [
            'orders' => $orders,
            'statusLogs' => $statusLogs,
            'estimasiWaktu' => $estimasiWaktu
        ]);
    }
}

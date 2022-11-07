<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\StatusLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HandleOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->is_admin == 0) {
            abort(403);
        }
        $statusLog = StatusLog::latest('created_at')->get()->unique('no_resi');
        return view('admin.adminOrder', [
            'orders' => Order::all(),
            'statusLogs' => $statusLog
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        // dd($order->no_resi);
        $statusLog = StatusLog::where('no_resi', $order->no_resi)->latest('created_at')->first();

        $esmtimasiWaktu = "-";
        if ($statusLog->estimasi != null) {
            $esmtimasiWaktu = $statusLog->estimasi;
        }
        // dd($statusLog->status);
        return view('admin.adminShowOrder', [
            'order' => $order,
            'statusLog' => $statusLog,
            'estimasiWaktu' => $esmtimasiWaktu
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        // dd($request['status'], $order);
        $data['status'] = $request['status'];
        Order::where('id', $order->id)->update($data);
        StatusLog::create([
            'no_resi' => $order->no_resi,
            'status' => $request['status'],
        ]);

        $estimasi = [
            'estimasi' => $request['estimasiWaktu']
        ];

        $statusLog = StatusLog::where('no_resi', $order->no_resi)->latest('created_at')->update($estimasi);

        return redirect('/admin/orders/' . $order->id)->with([
            'success' => 'order berhasil diupdate'
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $orders = Order::where('no_resi', $order->no_resi)->get();
        // dd($orders);
        $statusLog = StatusLog::where('no_resi', $order->no_resi)->get();
        // dd($statusLog);
        foreach ($orders as $item) {
            if ($item->bukti_bayar) {
                Storage::delete($item->bukti_bayar);
            }
            Order::destroy($item->id);
        }

        foreach ($statusLog as $item) {
            StatusLog::destroy($item->id);
        }

        return redirect('/admin/orders')->with('success', 'Order Berhasil dihapus!!');
        // if($order->bukti_bayar)
    }
}

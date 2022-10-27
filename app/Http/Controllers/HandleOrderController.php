<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\StatusLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // dd($statusLog->status);
        return view('admin.adminShowOrder', [
            'order' => $order,
            'statusLog' => $statusLog
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
            'status' => $request['status']
        ]);
        
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
        //
    }
}

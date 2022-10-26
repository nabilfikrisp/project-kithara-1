<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
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
        $orders = Order::where('no_resi', $request['no_resi'])->get();

        // dd($request->request->get('no_resi'));
        // if ($request->request->get('no_resi') != $orders->no_resi) {
        //     abort(403);
        // }

        return view('transaction.hasilCekResi', [
            'orders' => $orders
        ]);
    }
}

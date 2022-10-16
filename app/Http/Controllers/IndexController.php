<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
}

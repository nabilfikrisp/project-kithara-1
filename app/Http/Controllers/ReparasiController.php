<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemType;

class ReparasiController extends Controller
{
    public function visitReparasi()
    {
        return view('reparasi.reparasi');
    }

    public function visitReparasiHead()
    {
        $head = ItemType::where('id', '=', '1')->get();
        $tuning_machine = ItemType::where('id', '=', '2')->get();
        $nut = ItemType::where('id', '=', '3')->get();
        // dd($head);
        return view('reparasi.reparasiHead', [
            'item_head' => $head,
            'item_tuning_machine' => $tuning_machine,
            'item_nut' => $nut,
        ]);
    }

    public function visitReparasiNeck()
    {
        $neck = ItemType::where('id', '=', '4')->get();
        $fret = ItemType::where('id', '=', '5')->get();
        $pickup = ItemType::where('id', '=', '6')->get();
        // dd($neck);
        return view('reparasi.reparasiNeck', [
            'item_neck' => $neck,
            'item_fret' => $fret,
            'item_pickup' => $pickup,
        ]);
    }

    public function visitReparasiBody()
    {
        $body = ItemType::where('id', '=', '7')->get();
        $saddle = ItemType::where('id', '=', '8')->get();
        $bridge = ItemType::where('id', '=', '9')->get();
        $pin = ItemType::where('id', '=', '10')->get();
        // dd($body);
        return view('reparasi.reparasiBody', [
            'item_body' => $body,
            'item_saddle' => $saddle,
            'item_bridge' => $bridge,
            'item_pin' => $pin,
        ]);
        return view('reparasi.reparasiBody');
    }
}

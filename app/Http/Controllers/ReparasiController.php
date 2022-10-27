<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ItemType;
use Illuminate\Http\Request;

class ReparasiController extends Controller
{
    public function visitReparasi()
    {
        return view('reparasi.reparasi');
    }

    public function visitReparasiHead()
    {
        // $ubah_head = Service::where('service_name', 'ubah_head')->first();
        // dd($ubah_head->service_name);
        $services = Service::where('part', 'head')->get();
        return view('reparasi.reparasiHead', [
            'services' => $services
        ]);
    }

    public function visitReparasiNeck()
    {
        $services = Service::where('part', 'neck')->get();
        return view('reparasi.reparasiNeck', [
            'services' => $services
        ]);
    }

    public function visitReparasiBody()
    {
        $services = Service::where('part', 'body')->get();
        return view('reparasi.reparasiBody', [
            'services' => $services
        ]);
    }

    public function visitReparasiAll()
    {
        $services = Service::all();
        return view('reparasi.reparasiAll', [
            'services' => $services
        ]);
    }
}

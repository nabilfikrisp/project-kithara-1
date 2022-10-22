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
        return view('reparasi.reparasiHead', [
          
        ]);
    }

    public function visitReparasiNeck()
    {
        
        return view('reparasi.reparasiNeck', [
            
        ]);
    }

    public function visitReparasiBody()
    {
       
        return view('reparasi.reparasiBody', [
            
        ]);
        return view('reparasi.reparasiBody');
    }
}

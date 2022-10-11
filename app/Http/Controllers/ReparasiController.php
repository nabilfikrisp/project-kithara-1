<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReparasiController extends Controller
{
    public function visitReparasi()
    {
        return view('reparasi.reparasi');
    }

    public function visitReparasiHead()
    {
        return view('reparasi.reparasiHead');
    }

    public function visitReparasiNeck()
    {
        return view('reparasi.reparasiNeck');
    }

    public function visitReparasiBody()
    {
        return view('reparasi.reparasiBody');
    }
}

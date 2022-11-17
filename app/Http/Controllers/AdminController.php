<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Service;
use App\Models\Order;
use App\Models\StatusLog;

class AdminController extends Controller
{
    public function visitAdmin()
    {
        if (Auth::user()->is_admin == 0) {
            abort(403);
        }
        return view('admin.adminDashboard');
    }

    public function visitUser()
    {
        if (Auth::user()->is_admin == 0) {
            abort(403);
        }
        $data = User::all();
        // dd($data);
        return view('admin.adminUser', [
            'data_user' => $data,
        ]);
    }

    public function visitService()
    {
        if (Auth::user()->is_admin == 0) {
            abort(403);
        }
        $data = Service::all();
        // dd($data);
        return view('admin.adminService', [
            'data_user' => $data,
        ]);
    }

    public function updateService(Request $request){
        $data = [
            'part' => $request['part'],
            'service_name' => $request['service_name'],
            'estimasi_waktu' => $request['estimasi_waktu'],
            'biaya' => $request['harga']
        ];
        // dd($data, $request['serviceID']);
        $service = Service::where('id', $request['serviceID'])->update($data);

        return redirect('/admin/service/' . $request['serviceID'])->with([
            'success' => 'service berhasil diupdate'
        ]);
    }

    public function addService(){
        if (Auth::user()->is_admin == 0) {
            abort(403);
        }
        
        return view('admin.adminAddService', [
        ]);
    }

    public function handleAddService(Request $request){
        $validatedData = $request->validate([
            'part' => 'required',
            'service_name' => 'required',
            'estimasi_waktu' => 'required|numeric',
            'biaya' => 'required|numeric',
        ]);

        $service = Service::create($validatedData);

        return redirect('/admin/service')->with('success', 'Tambah Service Berhasil!');
    }
    
    public function visitOrder()
    {
        if (Auth::user()->is_admin == 0) {
            abort(403);
        }
        $data = Order::join('users', 'orders.user_id', '=', 'users.id')
            ->join('services', 'orders.service_id', '=', 'services.id')
            ->select(
                'orders.*',
                'users.name',
                'users.email',
                'users.no_hp',
                'users.alamat',
                'users.negara',
                'users.kota',
                'users.kecamatan',
                'users.kelurahan',
                'users.kode_pos',
                'services.part',
                'services.service_name',
                'services.estimasi_waktu',
            )
            ->get();
        
        return view('admin.adminOrder', [
            'data_user' => $data,
        ]);
    }
}

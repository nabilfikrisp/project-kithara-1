<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Service;
use App\Models\Order;

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
            'estimasi_waktu' => $request['estimasi_waktu'],
            'biaya' => $request['harga']
        ];
        // dd($data, $request['serviceID']);
        $service = Service::where('id', $request['serviceID'])->update($data);

        return redirect('/admin/service/' . $request['serviceID'])->with([
            'success' => 'service berhasil diupdate'
        ]);
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
        // dd($data);
        return view('admin.adminOrder', [
            'data_user' => $data,
        ]);
    }
}

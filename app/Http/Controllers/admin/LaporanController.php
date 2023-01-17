<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        return view('admin.laporan', [
        'data' => Order::join('status_order', 'status_order.id', '=', 'order.status_order_id')
        ->join('users', 'users.id', '=', 'order.user_id')
        ->select('order.*', 'status_order.name', 'users.name as nama_pemesan')
        ->get(),
   ] );
    }
}

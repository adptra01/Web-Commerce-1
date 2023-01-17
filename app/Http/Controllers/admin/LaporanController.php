<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        return view('home', [
        'data' => Order::sum('subtotal'),
   ] );
    }
}

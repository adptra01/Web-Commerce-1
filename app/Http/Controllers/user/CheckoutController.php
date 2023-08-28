<?php

namespace App\Http\Controllers\user;

use App\Alamat;
use App\Http\Controllers\Controller;
use App\Keranjang;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class CheckoutController extends Controller
{
    public function index()
    {

        try {
            //ambil session user id
            $id_user = Auth::user()->id;

            //ambil produk apa saja yang akan dibeli user dari table keranjang
            $carts = Keranjang::join('users', 'users.id', '=', 'keranjang.user_id')
                ->join('products', 'products.id', '=', 'keranjang.products_id')
                ->select('products.name as nama_produk', 'products.image', 'products.weigth', 'users.name', 'keranjang.*', 'products.price')
                ->where('keranjang.user_id', '=', $id_user)
                ->get();

            //lalu hitung jumlah berat total dari semua produk yang akan di beli
            $berattotal = 0;
            foreach ($carts as $item) {
                $berattotal += ( $item->weigth * $item->qty );
            }

            //lalu ambil id kota si pelanngan
            $city_destination = Alamat::where('user_id', $id_user)->first()->cities_id;

            //ambil id kota toko
            $alamat_toko = DB::table('alamat_toko')->first();

            //lalu hitung ongkirnya
            $cost = RajaOngkir::ongkosKirim([
                'origin'        => 156, // sesuaikan dengan lokasi toko
                'destination'   => $city_destination,
                'weight'        => $berattotal,
                'courier'       => 'jne'
            ])
            ->get();

            //Jika alamat pembeli = 156 (Jambi), maka
            // if ($city_destination == 156)
            // {
            //     // ongkir 10000
            //     $ongkir = 10000;
            // }else{
            //     //ambil hasil nya dari perhitungan raja ongkir
            //     $ongkir =  $cost[0]['costs'][0]['cost'][0]['value'];
            // }

            $ongkir =  $cost[0]['costs'][0]['cost'][0]['value'];
            // dd($ongkir);

            //lalu ambil alamat user untuk ditampilkan di view
            $alamat_user = Alamat::join('cities', 'cities.city_id', '=', 'alamat.cities_id')
                ->join('provinces', 'provinces.province_id', '=', 'cities.province_id')
                ->select('alamat.*', 'cities.title as kota', 'provinces.title as prov')
                ->where('alamat.user_id', $id_user)
                ->first();

            foreach($carts as $key){
                $products = Product::findOrFail($key->products_id);
                $products->stok -= $key->qty;
                $products->save();
            }

            //buat kode invoice sesua tanggalbulantahun dan jam
            return view('user.checkout', [
                'invoice' => 'ALV' . Date('Ymdhi'),
                'keranjangs' => $carts,
                'ongkir' => $ongkir,
                'alamat' => $alamat_user
            ]);
        } catch (\Exception $e) {
            return back()->with('salah', 'Terjadi kesalahan pada saat mengambil data ongkos kirim atau jumlah pemesanan anda, silahkan coba lagi.');
        }

    }
}

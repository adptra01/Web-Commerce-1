<?php

namespace App\Http\Controllers\user;

use App\Alamat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Keranjang;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{

    public function index()
    {

        $id_user = Auth::user()->id;
        $keranjangs = Keranjang::join('users', 'users.id', '=', 'keranjang.user_id')
            ->join('products', 'products.id', '=', 'keranjang.products_id')
            ->select('products.name as nama_produk', 'products.image', 'users.name', 'keranjang.*', 'products.price')
            ->where('keranjang.user_id', '=', $id_user)
            ->get();

        $cekalamat = Alamat::where('user_id', $id_user)->count();
        $data = [
            'keranjangs' => $keranjangs,
            'cekalamat'  => $cekalamat
        ];
        return view('user.keranjang', $data);
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'products_id' => 'required',
            'qty' => 'required|numeric|min:1',
        ]);
        $product = Product::findOrFail($request->products_id);

        if ($request->qty > $product->stok) {
            return redirect()->back()->withErrors(['quantity' => 'Jumlah pemesanan melebihi stok yang tersedia']);
        }
        Keranjang::create([
            'user_id' => $request->user_id,
            'products_id' => $request->products_id,
            'qty' => $request->qty,

        ]);

        return redirect()->route('user.keranjang');
    }

    /**
     * I dont know, it seem never used
     */
    // function show_Names($n, $m)
    // {
    //     return ("The name is $n and email is $m, thank you");
    // }

    public function update(Request $request)
    {
        $request->validate([
            'qty' => ' min:1',
        ]);

        $index = 0;
        foreach ($request->id as $id) {
            $keranjang = Keranjang::findOrFail($id);
            $productId = $keranjang->products_id;
            $product = Product::findOrFail($productId);
            $stok = $product->stok;
            if($request->qty[$index] <= $stok){
                $keranjang->qty = $request->qty[$index];
                $keranjang->save();
            }else{
                return back()->with('salah', 'Update jumlah produk melebihi stok barang, perhatikan jumlah stok produk yang ingin dipesan.');
            }
            
            $index++;
        }

        return redirect()->route('user.keranjang');
    }

    public function delete($id)
    {

        Keranjang::destroy($id);

        return redirect()->route('user.keranjang');
    }
}

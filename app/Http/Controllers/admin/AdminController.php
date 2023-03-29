<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.administrator.index',[
            'admin' => User::where('role', 'admin')->get()
        ]);
    }
    public function store(AdminRequest $request)
    {
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Crypt::encryptString('administrator'),
            'role' => 'admin',
        ]);

        return back()->with('success', 'Data berhasil ditambahkan. Silakan cek kembali data yang Anda masukkan 😁');
    }

    public function show($id)
    {
        return view('admin.administrator.edit', [
            'admin' => User::where('id', $id)->first()
        ]);
    }

    
    public function update(Request $request, $id)
    {
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Crypt::encryptString($request->password),
            'role' => 'admin',
        ]);

        return redirect('administrator')->with('success', 'Data berhasil diedit. Perubahan data telah disimpan di sistem 😂');
    }
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        
        return back()->with('success', 'Data berhasil dihapus. Data yang Anda pilih tidak lagi tersedia pada sistem 😁');

    }
}

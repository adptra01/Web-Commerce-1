<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('user.contact');
    }

    public function store(ContactRequest $request)
    {

        Contact::create($request->only('name', 'telp', 'message'));

        return back()->with('success', 'Pesan telah terkirim, mohon untuk menngu informasi lebih lanjut untuk masalah anda. Terima kasih');
    }

    public function tables()
    {
        return view('admin.contact.index', [
            'contacts' => Contact::latest()->get(),
        ]);
    }

    public function show($id)
    {
        return view('admin.contact.show', [
            'contact' => Contact::whereId($id)->first(),
        ]);
    }
}
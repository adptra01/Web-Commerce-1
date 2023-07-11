@extends('user.app')
@section('content')
    <div class="container mb-5">
        <div class="card border-0">
            @if (session('success'))
                <div class="alert alert-success text-center" role="alert">
                    <p>Pesan anda telah berhasil terkirim. Mohon tunggu informasi lebih lanjut mengenai masalah yang anda
                        laporkan. Terima kasih. 👌</p>
                </div>
            @elseif ($errors->all())
                <div class="alert alert-danger text-center" role="alert">
                    Ups, sepertinya ada kesalahan dalam penginputan 😢.
                </div>
            @endif

            <div class="card-body">
                <form action="{{ Route('contact.store') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-md-2 col-form-label">Nama Lengkap</label>
                        <div class="col-md-10">
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="name" autofocus>
                            @error('name')
                                <small class="text-danger fw-bold">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telp" class="col-md-2 col-form-label">Telepon</label>
                        <div class="col-md-10">
                            <input type="number" value="{{ old('telp') }}" name="telp" class="form-control" id="telp">
                            @error('telp')
                                <small class="text-danger fw-bold">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="message" class="col-md-2 col-form-label">Pesan</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="message" rows="5" name="message">{{ old('message') }}</textarea>
                            @error('message')
                                <small class="text-danger fw-bold">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 text-right">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

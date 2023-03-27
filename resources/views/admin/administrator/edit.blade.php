<x-apps>
    <x-slot name="title">
        Administrator
    </x-slot>
    <div class="container">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">ADMIN TOKO <small>/ {{ $admin->name }}</small></h1>
        <div class="alert alert-warning shadow" role="alert">
            <strong>Peringatan!!! </strong>Anda bertanggung jawab untuk mengelola data customer dengan hati-hati. Jangan
            menghapus, mengubah, atau menyalin data customer tanpa izin dari customer yang bersangkutan
        </div>
    </div>

    <div class="card shadow m-4">
        <div class="card-header font-weight-bold text-center">UBAH DATA ADMIN</div>
        <div class="card-body">
            <form action="/administrator/{{ $admin->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputUsername1">Nama administrator</label>
                    <input type="text" class="form-control" name="name" value="{{ $admin->name }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $admin->email }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="password">
                    <small class="text-danger"> <i
                            class="mdi mdi-alert-circle-outline icon-sm text-danger align-middle"></i> Kosongkan jika
                        tidak ingin mengubah password</small>
                </div>
                <div class="text-right">
                    <a href="/administrator" class="btn btn-secondary"><i class="fa fa-arrow-left"
                            aria-hidden="true"></i>
                        Kembali</a>
                    <button type="submit" class="btn btn-primary text-right"><i class="fas fa-check"></i>
                        Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-apps>

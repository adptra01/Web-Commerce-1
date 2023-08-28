<x-apps>
    <x-slot name="title">
        Administrator
    </x-slot>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">ADMIN TOKO</h1>
        @if (session('success'))
            <div class="alert alert-primary shadow" role="alert">
                {{ session('success') }}
            </div>
        @elseif ($errors->any())
            <div class="alert alert-danger shadow" role="alert">
                Ada yang salah dengan inputan anda, silahkan input ulang.
            </div>
            {{-- @else
            <div class="media bg-primary rounded mb-3 text-white p-3">
                <img class="align-self-center mr-3" width="230px" src="/layouts/DrawKit/vector (1).svg"
                    alt="Generic placeholder image">
                <div class="media-body">
                    <small>
                        <strong><i class="fas fa-regular fa-bell"></i> Peringatan!!!</strong> <br>
                        Sebelum Anda menambah, mengedit, atau menghapus data pada aplikasi ini, pastikan Anda telah
                        memeriksa kembali data yang Anda masukkan atau pilih. Data yang telah diubah atau dihapus tidak
                        dapat dikembalikan lagi. Jika Anda yakin dengan pilihan Anda, klik tombol konfirmasi. Jika
                        tidak, klik tombol batal.
                    </small>
                </div>
            </div> --}}
        @endif
        @include('admin.administrator.tambah')
    </div>

    <div class="card shadow m-3">
        <div class="card-body">
            <table id="mytable" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pelanggan</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $no => $item)
                        <tr>
                            <td class="text-center">{{ ++$no }} </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td class="text-center">
                                <div class="d-flex" style="gap: 5px">
                                    <a href="/administrator/{{ $item->id }}/edit" class="btn btn-warning"><i
                                            class="fa fa-gavel" aria-hidden="true"></i> Ubah</a>
                                    <form action="/administrator/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Yakin ingin menghapus data?')"
                                            class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-apps>

<x-apps>
    <x-slot name="title">
        Pelanggan
    </x-slot>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">Pelanggan</h1>

        {{-- <div class="media bg-dark rounded mb-3 text-white p-3">
            <img class="align-self-center mr-3" width="230px" src="/layouts/drawKit/vector (3).svg"
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
    </div>

    <div class="card shadow m-3">
        <div class="card-body">
            <table id="mytable" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pelanggan</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer as $no => $pel)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $pel->name }}</td>
                            <td>{{ $pel->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</x-apps>

<x-apps>
    <x-slot name="title">No. Rekening</x-slot>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">REKENING TOKO</h1>
        @if (session('success'))
            <div class="alert alert-primary shadow" role="alert">
                {{ session('success') }}
            </div>
        @elseif ($errors->any())
            <div class="alert alert-danger shadow" role="alert">
                Ada yang salah dengan inputan anda, silahkan input ulang.
            </div>
        @else
            <div class="media bg-primary rounded mb-3 text-white p-3">
                <img class="align-self-center mr-3" width="230px" src="/layouts/drawKit/vector (14).svg"
                    alt="Generic placeholder image">
                <div class="media-body">
                    <small> <strong><i class="fas fa-regular fa-bell"></i> Peringatan!!!</strong><br>Pada menu admin
                        bagian
                        no.rekening, Anda dapat melihat dan mengubah nomor rekening bank yang digunakan untuk menerima
                        pembayaran dari pelanggan. Nomor rekening ini harus sesuai dengan nama dan identitas Anda
                        sebagai admin. Terima kasih atas kerjasama Anda.
                    </small>
                </div>
            </div>
        @endif
        @include('admin.rekening.tambah')
    </div>
    <div class="card shadow m-4">
        <div class="card-body">
            <table id="mytable" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Bank</th>
                        <th>Atas Nama</th>
                        <th>No Rekening</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rekening as $no => $rek)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $rek->bank_name }}</td>
                            <td>{{ $rek->atas_nama }}</td>
                            <td>{{ $rek->no_rekening }}</td>
                            <td style="gap: 3px">
                                <a href="{{ route('admin.rekening.edit', ['id' => $rek->id]) }}"
                                    class="btn btn-warning btn-sm">
                                    <i class="fa fa-gavel" aria-hidden="true"></i> Ubah
                                </a>
                                <a href="{{ route('admin.rekening.delete', ['id' => $rek->id]) }}"
                                    onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-apps>

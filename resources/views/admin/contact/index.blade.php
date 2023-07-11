<x-apps>
    <x-slot name="title">
        Pusat Bantuan
    </x-slot>

    <div class="container">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">PUSAT BANTUAN</h1>
        <div class="media bg-primary rounded mb-3 text-white p-3">
            <img class="align-self-center mr-3" width="230px" src="/layouts/drawKit/vector (13).svg"
                alt="Generic placeholder image">
            <div class="media-body">
                <small>
                    <strong><i class="fas fa-regular fa-bell"></i> Peringatan!!!</strong> <br>
                    Berikut adalah pesan dari pelanggan jika terdapat ketidakjelasan atau kesalahan pada pesanan yang
                    dibuat.
                </small>
            </div>
        </div>
    </div>

    <div class="card shadow m-3">
        <div class="card-body">
            <div class="table-responsive">
                <table id="mytable" class="display responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Telp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $no => $item)
                            <tr>
                                <td> {{ ++$no }}</td>
                                <td> {{ $item->name }}</td>
                                <td> {{ $item->telp }}</td>
                                <td><a class="btn btn-primary btn-sm" href="{{ route('contact.show', $item->id) }}">Detail</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-apps>

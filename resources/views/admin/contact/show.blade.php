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

    <div class="container">
        <div class="mb-3">
            <span class="font-weight-bold text-primary">Nama Lengkap : </span>
            <p>{{ $contact->name }}</p>
        </div>
        <div class="mb-3">
            <span class="font-weight-bold text-primary">No. Telp : </span>
            <p>{{ $contact->telp }}</p>
        </div>
        <div class="mb-3">
            <span class="font-weight-bold text-primary">Pesan : </span>
            <p>{{ $contact->message }}</p>
        </div>
    </div>
</x-apps>

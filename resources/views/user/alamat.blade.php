@extends('user.app')
@section('content')
    {{-- contoh --}}
    <div class="site-section">
        <div class="container">

            @php
                $address = App\Alamat::where('user_id', Auth()->user()->id)->first();
                if ($address == true) {
                    $city = App\City::where('city_id', $address->cities_id)->first();
                }
            @endphp

            <div class="row">
                <div class="col-md">
                    <h5 class="font-weight-bold text-uppercase">Profil Akun</h5>

                    <div class="list-unstyled">
                        <span class="text-uppercase">nama: <p class="font-weight-bold">{{ auth()->user()->name }}</p>
                        </span>
                        <span class="text-uppercase">email: <p class="font-weight-bold">{{ auth()->user()->email }}</p>
                        </span>
                    </div>
                </div>
                <div class="col-md">
                    @if ($address == true)
                    <h5 class="font-weight-bold text-uppercase">Alamat Tujuan</h5>
                        <span class="text-uppercase">Kota: <p class="font-weight-bold">{{ $city->title ?? 'Belum di atur' }}
                            </p>
                        </span>
                        <span class="text-uppercase">alamat lengkap: <p class="font-weight-bold">
                                {{ $address->detail ?? 'Belum di atur' }}</p>
                        </span>
                        <a href="{{ route('user.alamat.ubah', ['id' => $alamat[0]->id]) }}" class="btn btn-dark">Ubah
                            Alamat</a>
                    @else
                    <h5 class="font-weight-bold text-uppercase">atur alamat</h5>
                    <form action="{{ route('user.alamat.simpan') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Pilih Provinsi</label>
                            <select name="province_id" id="province_id" class="form-control">
                                <option value="">Pilih Provinsi</option>
                                @foreach ($province as $provinsi)
                                    <option value="{{ $provinsi->province_id }}">{{ $provinsi->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-grup">
                            <label for="">Pilih Kota/Kabupaten</label>
                            <select name="cities_id" id="cities_id" class="form-control">
                            </select>
                        </div>
                        <div class="form-grup">
                            <label for="">Alamat Lengkap</label>
                            <input type="text" name="detail" id=""
                                placeholde="Kecamatan/Desa/Nama Jalan" class="form-control">
                            </select>
                        </div>
                        <div class="mt-4 text-right">
                            <button type="submit" class="btn btn-dark">Simpan</button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        var toHtml = (tag, value) => {
            $(tag).html(value);
        }
        $(document).ready(function() {
            //  $('#province_id').select2();
            //  $('#cities_id').select2();
            $('#province_id').on('change', function() {
                var id = $('#province_id').val();
                var url = window.location.href;
                var urlNya = url.substring(0, url.lastIndexOf('/alamat/'));
                $.ajax({
                    type: 'GET',
                    url: urlNya + '/getcity/' + id,
                    dataType: 'json',
                    success: function(data) {
                        var op = '<option value="">Pilih Kota</option>';
                        if (data.length > 0) {
                            var i = 0;
                            for (i = 0; i < data.length; i++) {
                                op +=
                                    `<option value="${data[i].city_id}">${data[i].title}</option>`
                            }
                        }
                        toHtml('[name="cities_id"]', op);
                    }
                })
            })
        });
    </script>
@endsection

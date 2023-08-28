<!-- Button trigger modal -->
<button type="button" class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-solid fa-user-plus"></i> Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="alert bg-primary text-white" role="alert">
                    <span class="modal-title" id="exampleModalLabel">
                        <h5 class="fw-bold"><i class="fas fa-exclamation-triangle"> PERINGATAN!!!</i>
                        </h5>
                        <small>Pastikan Anda telah memeriksa identitas dan kredensialnya dengan teliti. Admin baru akan
                            memiliki akses ke data penting dan fitur sensitif yang dapat mempengaruhi keamanan dan
                            kinerja sistem Jangan memberikan hak admin kepada orang yang tidak Anda kenal atau
                            percaya.</small>
                    </span>
                </div>
                </button>
            </div>
            <div class="modal-body">
                <form action="/administrator/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama lengkap</label>
                        <input type="text" class="form-control invalid" name="name" value="{{ old('name') }}">
                        @error('name')
                            <small class="text-danger form-text">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        @error('email')
                            <small class="text-danger form-text">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" value="administrator" readonly>
                        @error('password')
                            <small class="text-danger form-text">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"
                                aria-hidden="true"></i> Batal</button>
                        <button type="submit" class="btn btn-primary text-right"><i class="fas fa-check"></i>
                            Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

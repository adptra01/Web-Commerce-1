<!-- Button trigger modal -->
<button type="button" class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-window-restore" aria-hidden="true"></i> Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="alert bg-primary text-white" role="alert">
                    <small class="modal-title" id="exampleModalLabel">
                        <strong><i class="fas fa-regular fa-bell"></i> Peringatan!!!</strong> <br>Anda akan menambahkan
                        data rekening baru. Pastikan data yang Anda masukkan sudah benar dan sesuai dengan buku
                        rekening. Data rekening yang sudah ditambahkan tidak dapat dihapus, hanya dapat diedit. Apakah
                        Anda yakin ingin melanjutkan?
                        </p>
                </div>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.rekening.store') }}" method="POST">
                    @csrf
                    <div class="form-row mb-2">
                        <div class="col">
                            <label for="exampleInputUsername1">Nama Bank</label>
                            <input type="text" class="form-control" name="bank_name">
                        </div>
                        <div class="col">
                            <label for="exampleInputUsername1">Atas Nama</label>
                            <input type="text" class="form-control" name="atas_nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">No Rekening</label>
                        <input type="number" class="form-control" name="no_rekening">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary text-right"><i class="fas fa-check"></i>
                            Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

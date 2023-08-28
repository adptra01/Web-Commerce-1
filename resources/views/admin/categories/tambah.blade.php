<!-- Button trigger modal -->
<button type="button" class="btn btn-dark font-weight-bold" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-window-restore" aria-hidden="true"></i> Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="alert bg-dark text-white" role="alert">
                    <span class="modal-title" id="exampleModalLabel">
                        <h5 class="fw-bold"><i class="fas fa-exclamation-triangle"> PERINGATAN!!!</i>
                        </h5>
                        <small>Pastikan Anda telah menentukan kategori produk. Kategori produk mempengaruhi jenis dari
                            produk ditoko anda.</small>
                    </span>
                </div>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Kategori</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-dark text-right"><i class="fas fa-check"></i>
                            Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

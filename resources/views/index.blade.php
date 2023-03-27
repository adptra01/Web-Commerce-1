<!-- Button trigger modal -->
<button type="button" class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-address-book" aria-hidden="true"></i> Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <div class="alert alert-warning" role="alert">
                  <p class="modal-title" id="exampleModalLabel">
                      <strong class="text-warning"><i class="fas fa-exclamation-triangle"> PERINGATAN!!!</i>
                          </span></strong> <br>Pastikan Anda telah menentukan kategori produk. Kategori produk mempengaruhi jenis dari produk ditoko anda.
                        </p>
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
                    <button type="submit" class="btn btn-outline-primary text-right"><i class="fas fa-check"></i> Simpan</button>
                </div>
            </form>
          </div>
      </div>
  </div>
</div>

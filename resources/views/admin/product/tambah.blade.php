<!-- Button trigger modal -->
<button type="button" class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-window-maximize" aria-hidden="true"></i> Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="alert alert-warning" role="alert">
                    <small class="modal-title" id="exampleModalLabel">
                        <strong class="text-warning"><i class="fas fa-exclamation-triangle"> PERINGATAN!!!</i>
                            </span></strong> <br>Anda harus memasukkan informasi produk secara lengkap dan
							akurat sebelum menyimpannya. Pastikan Anda memilih kategori, harga, stok, deskripsi, dan gambar
							produk yang tepat.
                          </p>
                </div>
                </button>
            </div>
            <div class="modal-body">
				<form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="flex">
						<div class="w-3/4">
							<div class="form-group">
								<label for="exampleInputUsername1">Nama Produk</label>
								<input required type="text" class="form-control" name="name">
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect2">Pilih Kategori</label>
								<select class="form-control" name="categories_id" id="exampleFormControlSelect2">
									@foreach($categories as $categorie)
									<option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputUsername1">Berat (gram)</label>
								<input required type="number" class="form-control" name="weigth">
							</div>
							<div class="form-group">
								<label for="exampleInputUsername1">Harga</label>
								<input required type="number" class="form-control" name="price">
							</div>
							<div class="form-group">
								<label for="exampleInputUsername1">Stok</label>
								<input required type="number" class="form-control" name="stok">
							</div>
							<div class="form-group">
								<label for="">Deskripsi</label>
								<textarea name="description" id="" cols="30" rows="10" class="form-control" required>
									</textarea>
							</div>
							<div class="form-group">
								<label>File upload</label>
								<input required type="file" name="image" class="form-control">
							</div>
							<div class="text-right">
								<button type="submit" class="bg-success btn btn-success text-right">Simpan</button>
							</div>
						</div>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>

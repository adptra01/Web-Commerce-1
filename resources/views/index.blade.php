<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah 
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sebelum Anda menginputkan admin baru, pastikan Anda telah memeriksa identitas dan kredensialnya dengan teliti. Admin baru akan memiliki akses ke data penting dan fitur sensitif yang dapat mempengaruhi keamanan dan kinerja sistem. Jangan memberikan hak admin kepada orang yang tidak Anda kenal atau percaya.</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/administrator/store" method="POST">
                @csrf
                <div class="form-group">
                <label for="exampleInputUsername1">Nama administrator</label>
                <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                <label for="exampleInputUsername1">Email</label>
                <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                <label for="exampleInputUsername1">Password</label>
                <input type="text" class="form-control" name="password" value="administrator  {default}" readonly>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-outline-success text-right">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
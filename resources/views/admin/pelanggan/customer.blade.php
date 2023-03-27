<x-apps>
  <x-slot name="title">
      Pelanggan
  </x-slot>
  <div class="container">
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">PELANGGAN</h1>
    <div class="alert alert-warning shadow" role="alert">
        <strong>Peringatan!!! </strong>Anda bertanggung jawab untuk mengelola data customer dengan hati-hati. Jangan menghapus, mengubah, atau menyalin data customer tanpa izin dari customer yang bersangkutan
    </div>
  </div>
  
  <div class="card shadow m-4">
      <div class="card-body">
          <table id="mytable" class="display responsive nowrap" style="width:100%">
              <thead>
                  <tr>
                      <th>No.</th>
                      <th>Nama Pelanggan</th>
                      <th>Email</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($customer as $no => $pel)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $pel->name }}</td>
                    <td>{{ $pel->email }}</td>
                </tr>
              @endforeach
              </tbody>
          </table>
      </div>
  </div>



</x-apps>

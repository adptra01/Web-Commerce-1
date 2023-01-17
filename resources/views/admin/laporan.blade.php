@extends('admin.layout.apps')
@section('content')
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Laporan transaksi </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table" id="example">
                        <thead>
                          <tr>
                            <th> Invoice </th>
                            <th> Pemesan </th>
                            <th> Total(+Ongkir) </th>
                            <th> Status Pesanan </th>
                            <th> Tanggal transaksi </th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach ($data as $item)
                         <tr>
                            <td> {{ $item->invoice }} </td>
                            <td> {{ $item->nama_pemesan }} </td>
                            <td> {{ $item->subtotal + $item->ongkir }} </td>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->created_at->format('Y-m-d') }} </td>
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
@endsection
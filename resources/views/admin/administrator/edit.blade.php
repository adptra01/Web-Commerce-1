@extends('admin.layout.app')
@section('content')
<div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
              <i class="mdi mdi-home"></i>
            </span> Administrator </h3>
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
                <div class="row mb-3">
                  <div class="col">
                  <h4 class="card-title">Edit administrator</h4>
                  </div>
                  <div class="col text-right">
                  <a href="/administrator" onclick="window.history.back()" class="btn btn-primary">Kembali</a>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="/administrator/{{$admin->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="exampleInputUsername1">Nama administrator</label>
                              <input type="text" class="form-control" name="name" value="{{$admin->name}}" required>
                              </div>
                              <div class="form-group">
                              <label for="exampleInputUsername1">Email</label>
                              <input type="email" class="form-control" name="email" value="{{$admin->email}}" required>
                              </div>
                              <div class="form-group">
                              <label for="exampleInputUsername1">Password</label>
                              <input type="text" class="form-control" name="password" placeholder="password">
                              <small class="text-danger"> <i class="mdi mdi-alert-circle-outline icon-sm text-danger align-middle"></i>  Kosongkan jika tidak ingin mengubah password</small>
                              </div>
                              <div class="text-right">
                                  <button type="submit" class="btn btn-outline-success text-right">Simpan</button>
                              </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
@endsection

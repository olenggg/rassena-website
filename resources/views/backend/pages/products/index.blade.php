@extends('backend.layouts.app')

@section('main-content')


<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>harga</th>
                    <th>stok</th>
                    <th>deskripsi</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th>Nama</th>
                    <th>harga</th>
                    <th>stok</th>
                    <th>deskripsi</th>
                    <th>action</th>
                  </tr>
                </tfoot>
                <tbody>
                    @foreach($products as $pro)
                  <tr>
                      <td>{{$pro->nama}}</td>
                      <td>{{$pro->harga}}</td>
                      <td>{{$pro->stok}}</td>
                      <td>{{$pro->deskripsi}}</td>
                      <td>
                      <form action="{{ route('product.destroy',$pro->id) }}" method="POST">
   
                        <a class="btn btn-info" href="{{ route('product.show',$pro->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('product.edit',$pro->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                      </td>
                  </tr>
                    @endforeach
                </tbody>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>
        </div>
<!-- /.container-fluid -->

    
@endsection
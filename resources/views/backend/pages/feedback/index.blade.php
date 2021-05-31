@extends('backend.layouts.feedback')

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
                <a class="btn btn-success" href="{{ route('admin.feedback.create') }}"> Create New Feedback</a>
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>nama</th>
                    <th>pekerjaan</th>
                    <th>email</th>
                    <th>feedback</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th>nama</th>
                  <th>pekerjaan</th>
                    <th>email</th>
                    <th>feedback</th>
                    <th>action</th>
                  </tr>
                </tfoot>
                <tbody>
                    @foreach($feedback as $pro)
                  <tr>
                      <td>{{$pro->nama}}</td>
                      <td>{{$pro->pekerjaan}}</td>
                      <td>{{$pro->email}}</td>
                      <td>{{$pro->feedback}}</td>
                      <td>
                      <form action="{{ route('admin.feedback.destroy',$pro->id) }}" method="POST">
   
                        <a class="btn btn-info" href="{{ route('admin.feedback.show',$pro->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('admin.feedback.edit',$pro->id) }}">Edit</a>

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
        </div>
        </div>
<!-- /.container-fluid -->

    
@endsection

@include('backend.layouts.footer')
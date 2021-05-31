@extends('backend.layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.product.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('admin.product.store') }}" method="POST" enctype=multipart/form-data>
    @csrf
        <div class="form-group">
            <strong>Nama:</strong>
            <input type="text" class="form-control" name="nama">
        </div>


        <div class="form-group">
            <strong>Harga:</strong>
            <input type="text" class="form-control" name="harga">
        </div>


        <div class="form-group">
            <strong>Stok:</strong>
            <input type="text" class="form-control" name="stok">
        </div>

        <!-- <div class="form-group">
            <strong>Gambar:</strong>
            <input type="file" class="form-control" name="gambar">
        </div> -->

        <div class="form-group">
            <label for="exampleFormControlFile1">Gambar</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
        </div>

        <div class="form-group">
            <strong>Deskripsi:</strong>
            <textarea type="text" class="form-control" name="deskripsi" style="height:150px"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

@include('backend.layouts.footer')
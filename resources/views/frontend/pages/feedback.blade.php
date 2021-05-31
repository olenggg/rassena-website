@extends('frontend.layouts.app')

@section('main-content')
<div class="hero-wrap hero-bread" style="background-image: url('frontend/images/beras_ragam.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Contact us</span></p>
            <h1 class="mb-0 bread">Contact us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Alamat:</span> Perumahan Rewwin, Jl. Taman Cendrawasih No.5, Ngeni, Kepuhkiriman, Kec. Waru, Kabupaten Sidoarjo, Jawa Timur 61256</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>No Telp:</span> <a href="tel://62 318 670 584">+62 318 670 584</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
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
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="{{ route('feedbacks.store') }}" class="bg-white p-5 contact-form" method="POST" enctype=multipart/form-data>
              @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="nama" placeholder="Nama Anda">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan Anda">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email Anda">
              </div>
              <!-- <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div> -->
              <div class="form-group">
                <textarea name="feedback" id="" cols="30" rows="7" class="form-control" placeholder="Pesan Anda"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Kirim Masukan" class="btn btn-primary py-3 px-5">
              </div>

              
            </form>
          
          </div>

          <!-- <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div> -->
        </div>
      </div>
    </section>
@endsection
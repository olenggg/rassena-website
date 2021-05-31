@extends('frontend.layouts.app')

@section('main-content')
<div class="hero-wrap hero-bread" style="background-image: url('frontend/images/beras_ragam.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Produk Kami</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="/products" class="active">All</a></li>
    					<!-- <li><a href="#">Beras</a></li> -->
    					<!-- <li><a href="#">Fruits</a></li>
    					<li><a href="#">Juice</a></li>
    					<li><a href="#">Dried</a></li> -->
    				</ul>
    			</div>
    		</div>
    		<div class="row">
        @foreach($products as $prod)
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{asset('storage/beras_image/'.$prod->gambar)}}" alt="Colorlib Template">
    						<!-- <span class="status">30%</span> -->
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{$prod->nama}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
                  <p class="price"><span>Rp. {{$prod->harga}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
          </div>
          @endforeach
        <!-- page -->
    		<!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
    	</div>
    </section>

<!-- <div class="row">
@foreach($products as $prod)

    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
            <img class="card-img-top" style="width: 100%; height: 300px; display: block;" src="{{asset('storage/beras_image/'.$prod->gambar)}}" alt="image placeholder">
                <div class="card-body">
                <p class="name-text">{{$prod->nama}}</p>
                  <p class="card-text">{{$prod->deskripsi}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button class="btn btn-sm btn-outline-secondary" type="button">View</button>
                      <button class="btn btn-sm btn-outline-secondary" type="button">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
        </div>
    </div>

@endforeach
</div> -->
@endsection
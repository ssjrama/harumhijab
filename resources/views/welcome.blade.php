@extends('layouts.app')
@section('content')  

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/dasboard.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/slider-1.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/slider-2.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <!-- Hero Slider End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Kategori Harum Hijab</h2>
                        </div>
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            @foreach ($kategori as $k)
                                <li data-filter=".{{$k->kategori}}">{{$k->kategori}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list">
                @foreach ($barang as $b)
                    <div class="col-lg-3 col-sm-6 mix all {{$b->kategori->kategori}}">
                    <div class="single-product-item">
                        <figure>
                            <a href="/barang/{{$b->id}}"><img src="storage/images/{{$b->image}}" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6>{{$b->nama}}</h6>
                            <p>Rp. {{$b->harga}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                        <!-- Js Plugins -->
@endsection
@extends('layouts.app')
@section('content')  

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

<!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="images/dasboard.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Harum Hijab</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                           <h1>Harum Hijab</h1> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Harum Hijab</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Harum Hijab</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
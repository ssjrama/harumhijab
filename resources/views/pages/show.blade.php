@extends('layouts.app')
@section('content')
<div id="preloder">
        <div class="loader"></div>
    </div>

	<section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>{{$barang->kategori->kategori}}<span>.</span></h2>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="product-page">
       	 <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-slider owl-carousel">
                        <div class="product-img">
                        	<figure>
                        		<img src="../storage/images/{{ $barang->image }}" alt="image">
                        	</figure>
                                
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="product-content">
                        <h2>{{$barang->nama}}</h2>
                        <div class="pc-meta">
                            <h5>Rp. {{$barang->harga}} ,-</h5>
                        </div>  
                        <p>{{$barang->deskripsi}}</p>
                        <ul class="tags">
                            <li><span>Kategori : </span>{{$barang->kategori->kategori}}</li>
                        </ul>
                        <a href="/pesanan/{{$barang->id}}" class="primary-btn pc-btn">Order</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

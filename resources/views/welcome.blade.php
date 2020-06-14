@extends('layouts.app')
@section('kategori')
    @foreach ($kategori as $k)
        <a class="dropdown-item" href="#">{{$k->kategori}}</a>  
    @endforeach
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($barang as $b)
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="storage/images/{{$b->image}}" class="card-img-top" alt="img">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/barang/{{$b->id}}">{{$b->nama}}</a></h5>
                      <p class="card-subtitle">Rp,- {{$b->harga}}</p>
                      <p class="card-text">{{$b->deskripsi}}</p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

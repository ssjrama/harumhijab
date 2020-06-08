@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container">
       @if (count($pesanan)>0)
            <table class="table table-striped">
                <tr>
                    <th>ID Pesanan</th>
                    <th>Jumlah</th>
                    <th>Barang</th>
                    <th>Pemesan</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            @foreach ($pesanan as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->jumlah}}</td>
                    <td>{{$p->barang->nama}}</td>
                    <td>{{$p->user->name}}</td>
                    <td class="bg-primary text-light text-center">Status</td>
                    <td><a href="/admin/detail/{{$p->id}}" class="btn btn-primary">Detail</a></td>
                </tr>
            @endforeach
           </table>        
       @else
       @endif
    </div>
</main>
@endsection
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
                    <th>Alamat</th>
                    <th></th>
                    <th></th>
                </tr>
            @foreach ($pesanan as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->jumlah}}</td>
                    <td>{{$p->barang->nama}}</td>
                    <td>{{$p->user->name}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>
                        <form action="/admin/pesanan/{{$p->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
           </table>        
       @else
       @endif
    </div>
</main>
@endsection
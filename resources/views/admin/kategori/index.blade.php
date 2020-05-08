@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
       <a href="/admin/kategori/create" class="btn btn-primary">Tambah Kategori</a>
       @if (count($kategori)>0)
            <table class="table table-striped">
                <tr>
                    <th>Kategori</th>
                    <th></th>
                    <th></th>
                </tr>
            @foreach ($kategori as $k)
                <tr>
                    <td>{{$k->kategori}}</td>
                    <td><a href="/admin/kategori/{{$k->id}}/edit" class="btn btn-success">Edit</a></td>
                    <td>
                        <form action="/admin/kategori/{{$k->id}}" method="post">
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
@extends('layouts.admin')
@section('content')    
<main class="dash-content">
    <div class="container-fluid">
       @if (count($user)>0)
            <table class="table table-striped">
                <tr>
                    <th>ID User</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            @foreach ($user as $u)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                </tr>
            @endforeach
           </table>        
       @else
       @endif
    </div>
</main>
@endsection
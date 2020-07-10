@extends('layouts.app')
@section('content')	 
    <!-- Cart Page Section Begin -->
    <div class="cart-page">
        <div class="container">
             <div class="total-info">
                  <div class="total-table">
                    <table>
                      <thead>
                    	<tr>
	                	 	<th>Nama produk</th>
	                    	<th>Jumlah</th>
	                      	<th>Harga</th>
	                        <th>Alamat</th>
                          <th>Status</th>
	                        <th>Total Bayar</th>
	                        <th></th>
                       	</tr>
                       </thead>
	                    <tbody>
	                        @foreach($pesanan as $p)
	                        <tr>
	                            <td>{{$p->barang->nama}}</td>
	                            <td>{{$p->jumlah}}</td>
	                            <td>{{$p->barang->harga}}</td>
	                            <td>{{$p->alamat}}</td>
                              <td>
                                @if($p->status == "" )
                                  Belum Dicek
                                  @else
                                  {{$p->status}}
                                @endif
                              </td>
	                            <td>{{$p->jumlah * $p->barang->harga}}</td>
	                            <td><a href="/bayar/{{$p->id}}" class="primary-btn chechout-btn">Bayar</a></td>
	                        </tr>
	                        @endforeach
	                    </tbody>
	                </table>
	            </div>
              </div>
             </div>
           </div>
          </div>
        </div>
    </div>
    <!-- Cart Page Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
@endsection
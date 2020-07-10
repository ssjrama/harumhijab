@extends('layouts.app')
@section('content')

   <!-- Cart Total Page Begin -->
    <section class="cart-total-page spad">
        <div class="container">
            <form action= "/pesanan/{{$barang->id}}"  method="POST" class="checkout-form">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Keterangan</h3>
                    </div>

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Nama *</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Kode Pos *</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">No. Telp *</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text">
                            </div>
                        </div>

                          <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name" for="jumlah">Jumlah *</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name" for="deskripsi">Deskripsi *</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name" for="alamat">Alamat *</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text">
                            </div>
                        </div>

                        <!-- tombol kirim agar rata -->
                        <div class="row">
                    <div class="col-lg-3">
                        <div class="order-table">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-method">
                            <button type="submit" value="Submit">Kirim</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Cart Total Page End -->

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

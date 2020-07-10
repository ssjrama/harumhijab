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
                                <p class="in-name" for="jumlah">Jumlah *</p>
                            </div>
                            <div class="col-lg-10 border-0">
                                <input type="text" name="jumlah">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name" for="deskripsi">Deskripsi *</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="deskripsi">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name" for="alamat">Alamat *</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="alamat">
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

        <!--footer layout-->
            <div class="social-links-warp">
            <div class="container">
                <p class="lead text-center pb-3">Kunjungi kami di :</p>
                <div class="social-links row justify-content-center">
                    <a href="" class="instagram"><i class="fa fa-instagram col"></i><span>instagram</span></a>
                    <a href="" class="facebook"><i class="fa fa-facebook col"></i><span>facebook</span></a>
                </div>
            </div>

<div class="container text-center pt-5">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>

    </footer>

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

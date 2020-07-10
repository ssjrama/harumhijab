@extends('layouts.app')
@section('content')
    <div class="container">
        <p>Upload bukti bayar berupa no transaksi, waktu transaksi, Atas nama transaksi</p>
    </div>
    <div class="container">
        <form action="/bayar/{{$pesanan->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="bukti_bayar">Bukti Bayar</label>
                <textarea name="bukti_bayar" rows="5" class="form-control"></textarea>
            </div>
            <input type="submit" value="Submit" class="site-btn">
        </form>
    </div>
    <br>
    <br>
    <!-- Footer Section Begin -->
    <footer>
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                    </div>
                </div>
            </div>
        </div>
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
@endsection

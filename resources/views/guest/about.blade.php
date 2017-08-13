@extends('layouts.guest')
@section('content')
<section class="section-intro bg-faded text-xs-center">
  <div class="container"> 
    <h1 class="wp wp-1">{{ config('app.name') }} memudahkan anda untuk berdonasi sebelum berbelanja.</h1>
    <h3 class="wp wp-1">Situs rekomendasi belanja untuk seluruh orang baik di Indonesia. Dengan anda klik dan belanja berdasarkan referensi kami, maka anda sudah membantu mendonasikan casback anda untuk orang yang membutuhkan.</h3>
    <p class="lead wp wp-2">Kami mendonasikan 100% penghasilan untuk didonasikan ke Anak Yatim dan Fakir Miskin.</p>
    <img src="landio/img/senyum-anak-yatim.jpg" alt="iPad mock" class="img-fluid wp wp-3">
    </br>
   
  </div>
  <div class="container">
      <h1 class="wp wp-1 animated fadeInUp"> Langkah - langkah di {{ config('app.name') }} </h1>
      <p>1. Cari Produk</p>
      <p>2. Klik Beli</p>
      <p>3. Anda akan diarahkan ke toko online yang anda pilih.</p>
      <p>4. Silahkan belanja sesuai kebutuhan anda.</p>
      <p>5. {{ config('app.name') }} mendapatkan pendapatan dari iklan dan affiliasi</p>
      <p>6. {{ config('app.name') }} memberikan 100% dari penghasilan iklan tersebut ke Anak Yatim</p>
  </div> 
  <div class="container">
  	  <h1 class="wp wp-1 animated fadeInUp"> Masalah </h1>
      <p>1. Lebih dari 250 juta penduduk Indonesia, tidak dapat mengakses fasilitas kesehatan bahkan fasilitas termurah yang ada. (Fair Future Foundations, 2015).</p>
      <p>2. 2.3 juta anak Indonesia dengan umur 7-15 tahun tidak dapat mengakses pendidikan (Unicef, 2014)</p>
      <p>3. 26 juta orang Indonesia hidup di bawah kemiskinan (Word Bank and BPS, 2014).</p>
  </div> 
</section>
</br>
@endsection
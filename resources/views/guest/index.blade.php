@extends('layouts.guest')
@section('content')
 <!-- Hero Section
    ================================================== -->
    
<header id="landioCarousel" class="carousel carousel-header slide bg-inverse" data-ride="carousel" data-interval="0" role="banner">
  <ol class="carousel-indicators">
    <li data-target="#landioCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#landioCarousel" data-slide-to="1"></li>
    <li data-target="#landioCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active" style="background-image: url(./landio/img/bg-header.jpg);">
      <div class="carousel-caption">
        <h1 class="display-3">Selamat datang di {{ config('app.name', 'Laravel') }}.</h1>
        <h2 class="m-b-3 hidden-sm-down"><em>Hai, Semua!</em> Sekarang kita bisa belanja sambil sedekah.</h2>
        <a class="btn btn-outline-secondary m-b-2" href="{{ URL::to('belanja') }}" role="button">Belanja</a>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url(landio/img/bg-header-3.jpg);">
      <div class="carousel-caption">
        <h1 class="display-3">Belanja sambil bersedekah.</h1>
        <h2 class="m-b-3 hidden-sm-down">Mari jadi bagian <strong>orang baik</strong>.</h2>
        <a class="btn btn-outline-secondary m-b-2" href="{{ URL::to('tentang-kami') }}" role="button">Cara Kerja</a>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url(./landio/img/bg-header-2.jpg);">
      <div class="carousel-caption">
        <h1 class="display-3">Bantu mereka yang membutuhkan.</h1>
        <h2 class="m-b-3 hidden-sm-down">Mari bergabung untuk membantu sesama</h2>
        <a class="btn btn-outline-secondary m-b-2" href="{{ URL::to('register') }}" role="button"></span>Daftar</a>
      </div>
    </div>
  </div>
</header>


<div class="container text-xs-center">
    <h3 style="padding-top: 40px">Pilih Produk</h3>
    <div class="col-md-12">
        <div class="row">
          <div class="infinite-scroll">
            @foreach ($products as $product)

              @include ('products.list')

            @endforeach
            {{ $products->links() }}
          </div>

        </div>
    </div>
</div> 
</br>
@endsection
@extends('layouts.guest')
@section('content')
<div class="container text-xs-center">
<h3 style="padding-top: 40px">Cari produk berdasarkan "{{ $q }}"</h3>
<div class="col-md-12">
    <div class="row">
        @foreach ($products as $product)

          @include ('products.list')

        @endforeach
    </div>
</div>
</div> 
</br>
@endsection
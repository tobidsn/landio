@extends('layouts.guest')
@section('content')
<div class="container text-xs-center">
<h3 style="padding-top: 40px">Belanja</h3>
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
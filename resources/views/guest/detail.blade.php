@extends('layouts.guest')
@section('content')
<section id="content">
    <div class="container"> 
        <div class="col-md-12">
            <div class="row clearfix row-centered pos">
                <div class="span12">
                  <div class="breadcrumb clearfix">
                    <span itemscope=""><a href="#" title="" itemprop="url"><span itemprop="title">Home</span></a></span> 
                    <span class="arrow-space">&gt;</span>
                    <span itemscope="">
                        <a href="/kategori/detail/{{ $product->category->slug }}" title="">{{ $product->category->name }}</a>
                    </span>
                    <span class="arrow-space">&gt;</span>
                    <strong>{{ $product->name }}</strong>
                  </div>
                  <div class="col-sm-8 col-lg-8 col-md-8">
                      <div class="image featured img-center">
                        <img id="target" class="img-responsive" src="{{URL::asset('/img/'.$product->cover)}}" alt="{{ $product->name }}">
                      </div> 
                      <p>{!! $product->description !!}</p>
                    
                  </div>
                  <div class="col-sm-4 col-lg-4 col-md-4">
                       <!-- User Card
                  ================================================== -->

                      <h1 class="title">{{ $product->name }}</h1>
                      </br>
                      <div class="description">
                        {{ $product->short_description }}
                      </div>
                      </br>
                      <a href="{{ $product->link }}" target="_blank" class="btn btn-primary has-gradient btn-block">
                        Beli Sekarang
                      </a> 
                  <hr class="invisible">
                  </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="container"> 
    <h3 style="padding-top: 40px">Produk Terkait</h3>
        <div class="col-md-12">
            <div class="row">
                <div class="infinite-scroll">
                    @forelse ($related as $product)

                        @include ('products.list')

                    @empty
                        <p>Belum ada produk terkait</p>
                    @endforelse
                    {{ $related->links() }}
                </div>
            </div>
        </div>
    </div>  
</section>
</br>
@endsection
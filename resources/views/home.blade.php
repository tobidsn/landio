@extends('layouts.guest')

@section('content')
<hr class="invisible">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xl-12 col-xl-offset-12">
            <div class="card card-inverse card-social text-xs-center">
                <div class="card-block has-gradient">
                  <img src="{{ asset('images/user.png') }}" height="90" width="90" alt="Avatar" class="img-circle">
                  <h5 class="card-title">{{ Auth::user()->name }}</h5>
                  <h6 class="card-subtitle">{{ Auth::user()->email }}</h6>
                  {{-- <button type="submit" class="btn btn-outline-secondary btn-sm">Edit</button> --}}
              </div>
              <div>   
              </div>
          </div>
          <hr class="invisible">
      </div>
  </div>
</div>
<div class="container text-xs-center">
<h3 style="padding-top: 10px">Pilih Kategori Produk</h3>
<div class="col-md-12">
    <div class="row">
        <div class="infinite-scroll">
            @foreach ($category as $list)

            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="product span4"> 
                     <div class="image">
                        <a href="/kategori/detail/{{ $list->slug }}">
                          <img src="{{ URL::asset('/img/'.$list->cover)}} " alt="{{ $list->name }}">
                        <span class="hover-text"><p>{{ $list->short_description }}</p></span>
                        </a>
                    </div>
                    <div class="details">
                        <a href="/kategori/detail/{{ $list->slug }}" class="clearfix">
                           <span class="title">{{ $list->name }}</span> 
                           <span class="tbl">Pilih</span> 
                        </a> 
                    </div>
                </div>
            </div> 
            @endforeach
            {{ $category->links() }}
        </div>
    </div>
</div>
</div> 
</br>
<hr>
@endsection

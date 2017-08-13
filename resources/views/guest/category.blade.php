@extends('layouts.guest')
@section('content')
<div class="container text-xs-center">
<h3 style="padding-top: 40px">Pilih Kategori</h3>
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
@endsection
 <div class="col-sm-4 col-lg-4 col-md-4">
   <div class="product span4"> 
     <div class="image">
       <a href="/detail/{{ $product->slug }}">
         <img class="lazy" data-original="{{URL::asset('/img/'.$product->cover)}}" alt="{{ $product->name }}" height="225px" width="320px" >
         <span class="hover-text"><p>{{ Str::words($product->short_description, 10) }}</p></span>
       </a>
     </div>
     <div class="details">
       <a href="/detail/{{ $product->slug }}" class="clearfix">
         <span class="title">{{ $product->name }}</span> 
         <span class="price"> 
           | Rp. {{ $product->price }}
         </span>
         <span class="tbl">Beli</span> 
       </a> 
     </div>
   </div>
 </div> 
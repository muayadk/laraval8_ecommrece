@extends('master')
@section('content')

<section></section>
<br>
<div class="custom-product">



<hr>
    <div class="trending-wrapper">
      <h3> </h3>

      @foreach($products as $item )
     <div class="container trending-item text-center">
     <a href="detail/{{$item->id}}">
        <img src="/{{$item->gallery}}" class="trending-img" >
        <div class="">
            <h5>{{$item->productName}}</h5>
          
        </div>
        </a>
    </div>  
     @endforeach
    </div>

</div>

@endsection
<hr>
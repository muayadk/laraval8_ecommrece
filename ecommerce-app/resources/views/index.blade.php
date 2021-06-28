@extends('master')
@section('content')

<section></section>
<br>
<div class="custom-product">


<div id="demo" class="carousel slide" data-ride="carousel" >

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    
     @foreach($products as $item )
     <div class="carousel-item {{$item['id']==1?'active':''}}">
     <a href="detail/{{$item['id']}}">
        <img src="{{$item['gallery']}}" class="slider-img" >
        <div class="carousel-caption  slider-text">
            <h3>{{$item['productName']}}</h3>
            <p>{{$item['details']}}</p>
        </div>
        </a>
    </div>  
     @endforeach
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<hr>
    <div class="trending-wrapper">
      <h3> المنتجات الاكثر مبيعا</h3>

      @foreach($products as $item )
     <div class="container trending-item text-center">
     <a href="detail/{{$item['id']}}">
        <img src="{{$item['gallery']}}" class="trending-img" >
        <div class="">
            <h5>{{$item['productName']}}</h5>
          
        </div>
        </a>
    </div>  
     @endforeach
    </div>

</div>

@endsection
<hr>
@extends('master')
<br><br>
@section('content')

<section></section>

<br>
<section></section>

<div class="custom-product">

<div class="col-sm-4">
<a href="#"class="text-center" ><b> فلترة </b></a>
</div>

<h2 > نتائج البحث</h2>

<div class="trending-wrapper">
    

      @foreach($products as $item )
     <div class="container trending-item text-center">
     <a href="detail/{{$item['id']}}">
        <img src="{{$item['gallery']}}" class="trending-img" >
        <div class="">
          <h2>{{$item['productName']}}</h2>
          <h3>السعر :{{$item['price']}}</h3>
          <p>التفاصيل :{{$item['details']}}<p>
        </div>
        </a>
    </div>  
     @endforeach
    </div>


</div>
@endsection
@extends('master')
<br>
<br>
<section> </section>
@section('content')

<hr>
   <section></section>
<div class="container">
  

    <div class="row">
        <div class="col-ms-4">
          <img src="/{{$productdetail['gallery']}}" class="" alt="none img">
        </div>
        
        <div class="col-ms-8" >
            <div style="text-align: initial;margin-right: 330px;">
                <a href="/">عودة للخلف</a>
                <h2>{{$productdetail['productName']}}</h2>
                <h3>السعر : {{$productdetail['price']}}</h3>
                <p style="word-wrap:break-word;"><b>التفاصيل : </b>{{$productdetail['details']}}</p>
            </div>

            <div class="text-center">
            <form action="/add_to_cart" method="POST">
              @csrf
                 <input type="hidden" name="product_id" value="{{$productdetail['id']}}">
                <button type="submit" class="btn btn-primary">اضافة للسلة</button>
            </form>
         
            <br> <br>
            <button type="button" class="btn btn-success"> شراء الان</button>
             </div>
        </div>

    </div>
</div>
@endsection
@extends('master')
<br>
<br>
<section> </section>
@section('content')

<hr>
   <section></section>

 <h4 class="text-center" ><strong > المنتجات المضافة للسلة </strong></h4>
    <div class="col-lg-12" >
      <a href="#"> فلتر</a>

        <div class="text-center"  >
        <a href="/ordernow" class="btn btn-success "> طلب الان</a> 
        </div>
      
       <br>
       <hr>
       
       
        <div class="trending-wrapper" style="float:;">
         
                @foreach($products as $item )
              <div class="row cart-list-divider">

                  <div class="col-sm-3">
                      <a href="detail/{{$item->id}}">
                      <img src="{{$item->gallery}}" class="trending-img" ></a>
                    </div>

                    <div class="col-sm-4">
                        <div class="text-left">
                          <h3 style="text-align: inherit;"> {{$item->productName}}</h3>
                          <h4 style="text-align: inherit;">  <b style="color:red;">{{$item->price}} </b>  :  price</h4>
                          <p style="color:000; text-align: inherit;"> {{$item->details}}</p>
                        </div>
                    </div>

                    <div class="col-sm-4"> 
                      <a href="removecart/{{$item->cart_id}}" class="btn btn-warning">  حذف من السلة</a>
                    </div>
                    
                </div> 
           
               
                @endforeach
           </div>
      </div>
  </div>

@endsection
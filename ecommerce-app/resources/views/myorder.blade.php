@extends('master')
<br>
<br>
<section> </section>
@section('content')

<hr>
   <section></section>

 <h4 class="text-center" ><strong > قائمة طلباتي  </strong></h4>
    <div class="col-lg-12" >
      <a href="#"> فلتر</a>

        
      
       <br>
       <hr>
       
       
        <div class="trending-wrapper" style="float:;">
         
                @foreach($orders as $item )
              <div class="row cart-list-divider">

                  <div class="col-sm-3">
                   
                      <img src="{{$item->gallery}}" class="trending-img" >
                    </div>

                    <div class="col-sm-4">
                        <div class="text-left">
                          <h4 style="text-align: left;"> {{$item->status}} <b>:  &nbsp; &nbsp;status </b></h4>
                          <h4 style="text-align: left;"> {{$item->payment_method}}  <b> :  &nbsp; &nbsp; payment method </b></h4>
                          <h4 style="ext-align: left;"> {{$item->payment_status}} :<b> &nbsp;  &nbsp;payment status  </b></4>
                            <h4 style="ext-align: left;"> {{$item->address}} <b> : &nbsp; &nbsp; Address </b></h4>
                        </div>
                    </div>

                   
                </div> 
           
               
                @endforeach
           </div>
      </div>
  </div>

@endsection
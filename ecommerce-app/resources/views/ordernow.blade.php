@extends('master')
<br>
<br>
<section> </section>
@section('content')


<section></section>

 <h4 class="text-center" ><strong>    </strong></h4>
    <div class="col-lg-12">
        <table class="table " style="margin-right:100px;">
            <tbody>
             <tr>
             <td>الاجمالي</td>
              <td>$ {{$total}}</td>
             </tr>

             <tr>
             <td> الضريبة</td>
              <td>$ 0</td>
             </tr>

             <tr>
             <td> التسليم</td>
              <td>$ 10</td>
             </tr>

             <tr>
             <td> الاجمالي العام</td>
              <td>$ {{$total+10}}</td>
             </tr>
            </tbody>
        </table>
        
 <div class="container">

    <form id="regForm" style="align-items:right;" method="post" action="orderplace" >
              @csrf
            <div class="form-group">
                <label class="label-control" phaceholder="اكتب العنوان" style="float:right;" > الـعـنـوان </label>
                <textarea type="text"  name="address" class="form-control"> </textarea>
            </div>

            <div class="form-group">
                <label class="label-control" style="float:right;"> طريقة الدفع  </label>
                <input type="radio" value="cash"  name="payment" class="form-control"> <span>online payment  </span><br>
                <input type="radio" value="" name="payment" class="form-control"> <span> EMI payment  </span><br>
                <input type="radio" value="cash" name="payment" class="form-control"> <span>delivary on payment </span> <br>
            </div>

            
            
            <button type="submit"  class="btn btn-primary btn-rounded  text-center">    تاكيد الطلب </button>
     </form>

    </div>
</div>


@endsection
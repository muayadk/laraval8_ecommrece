@extends('master');
@section('content')

<br>
<br>


<div class="container ">

 <h1 class="text-center"> تسجيل الدخول</h1>

    <form id="regForm" style="align-items:;" method="POST" action="login" >
       @csrf
        <div class="form-group">
            <label class="label-control" style="float:right; font-size:16px; font-type:bold;" > البريد الالكتروني : </label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label class="label-control" style="float:right; font-size:16px; font-type:bold;" > كلمة السر :  </label>
            <input type="password" name="password"  class="form-control">
        </div>

    <button type="submit" class="btn btn-primary btn-rounded  text-center">  دخول  </button>
    </form>

  </div>


@endsection
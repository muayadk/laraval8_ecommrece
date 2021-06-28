<?php 
use App\Http\Controllers\PorductController;
use App\Models\Category;
$total=0;
//if(Session::>has('user'))
if(Session()->has('user'))
{
    $total =PorductController::cartItem();
}

$category =Category::all();

?>
<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color white lighten-1 fixed-top bg-white portfolio-navbar gradient">
      <a class="navbar-brand text-monospace text-uppercase text-danger bg-primary logo" href="/" target="_blank"><strong>نا</strong><span class="text-warning">نوستور</span></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto" >
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/">الرئيسية</a></li>
                  
                    <li class="dropdown nav-item">
					<a class="dropdown-toggle nav-link   
                    dropdown-toggle d-inline-block" data-toggle="dropdown" 
                    aria-expanded="false" href="#">قائمة الاصناف </a>
                        <div class="dropdown-menu" role="menu">
						@foreach($category as $item)
						<a class="dropdown-item" role="presentation" href="category/{{$item->cat_name}}"> {{$item->cat_name}} </a>
                        @endforeach
						
                    </li>
                      <li class="nav-item" role="presentation"><a class="nav-link active" href="/myorder">طلباتي</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="">عتا</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="">تواصل معنا</a></li>
                   
                   
                </ul>

                <ul class="navbar-nav navbar-left" >
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                        <i class="fab fa-facebook-f"></i> فيس بوك
                        <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fab fa-instagram"></i> انستغرام</a>
                    </li>
                     
                <li class="dropdown nav-item">
                       @if(Session::has('user'))   
					<a class="dropdown-toggle nav-link   
                    dropdown-toggle d-inline-block" data-toggle="dropdown" 
                    aria-expanded="false" href="#"> 
                    
                     <i class="fas fa-user"></i>   {{Session::get('user')['userName']}} </a> 
                        <div class="dropdown-menu" role="menu">
                         <a class="dropdown-item"  role="presentation" href="/logout">خروج</a>
                         </div>
                          @else
                          <a class="dropdown-toggle nav-link   
                    dropdown-toggle d-inline-block" data-toggle="dropdown" 
                    aria-expanded="false" href="#"> 
                    
                     <i class="fas fa-user"></i>  الدخول </a> 
                           <div class="dropdown-menu" role="menu">
                           <a class="dropdown-item"  role="presentation" href="/login">تسجيل الدخول</a>
                            <a class="dropdown-item" href="/register">تسجيل الاشتراك</a>
                          @endif
                        </div>
                     
                        
                    </li>
            </ul>
       
        </div>
    </nav>
    <section> </section>
  <br>
   <br>
            
   <section> </section>
    <!--end nav bar -->
 

    <nav class="navbar navbar-light navbar-expand-md  navigation-clean-search"  id="navbar2">
        <div class="container"><a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">
               تدبيل</span></button>
            <div class="collapse navbar-collapse d-inline align-items-center" id="navcol-1">
           
                <form class="form-inline mr-auto" action="/search"  target="_self">
              
                    <div class="form-group"><label for="search-field">
                        <i class="fa fa-search"></i></label>
                        <input class="form-control form-control-lg align-self-center search-field" name="query" name="search" placeholder="بحث عن منتج" id="search-field">
                    </div>
                    <button type="submit" class="btn btn-info mx-auto action-button" role="button" > <strong> بحث</strong> </button>  
                </form>
               
                <a class="btn btn-outline-primary action-button mx-auto" role="button" href="/cartlist"><strong style="color:blue;"> السلة  ({{$total}}) </strong> &nbsp;<span class="bounce animated">
                </span></a>
            </div>
        </div>
    </nav>
    <!--end nav for search -->
   <section></section>
 







  
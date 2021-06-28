<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	  <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.min.css')}}">

    <style>
	.nav-item{
         margin-left:20px;
     }

     img.slider-img{
       height:400px !important;
       margin:center;
      
       
     }
    
     .custom-product{
       height:600px;
       text-align:right;
       margin-right:30px;
      
    
     }
     .slider-text{
       background-color:#1f8ab3  !important;
     }
     .trending-wrapper{
       margin-left:30px;
       font-style:bold;
     }
     .trending-item{
        float:left;
        width:25%;
     }
     .trending-img{
       height:100px;
     }

     .cart-list-divider{
      border-bottom:1px solid #ccc;
      margin-bottom:20px;
      padding-bottom:20px;
     }
	  </style>
</head>

<body>
   
{{View::make('header')}}

@yield('content');



{{View::make('footer')}}

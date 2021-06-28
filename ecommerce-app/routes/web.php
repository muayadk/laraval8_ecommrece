<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PorductController;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login',function(){
return view('login');
});

Route::get('/logout',function(){
    Session::forget('user');
return redirect('login');
});

Route::get('/register',function (){ 
    return view('register');
});
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[PorductController::class,'index']);
Route::get("detail/{id}",[PorductController::class,'detail']);
Route::get("search",[PorductController::class,'search']);
Route::post("add_to_cart",[PorductController::class,'addToCart']);
Route::get("cartlist",[PorductController::class,'cartList']);
Route::get("/removecart/{id}",[PorductController::class,'removeCart']);
Route::get("ordernow",[PorductController::class,'orderNow']);
Route::post("orderplace",[PorductController::class,'orderPlace']);
Route::get("myorder",[PorductController::class,'myOrder']);
Route::get("category/{name}",[PorductController::class,'catProduct']);



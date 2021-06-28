<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
          
          [  [
            'productName'=>'LG3600 mobile',
            'price'=>'250',
            'category'=>'mobile',
            'details'=>'us ver goood mobile phone strong screen tutch the phone is has 5gb ram ',
            'gallery'=>'img/3.jpg'
        ]
        ,

        [
            'productName'=>'Moto f5 mobile',
            'price'=>'100',
            'category'=>'mobile',
            'details'=>'us ver goood mobile phone strong screen tutch the phone is has 5gb ram ',
            'gallery'=>'img/4.jpg'
        ]
        ,

        [
            'productName'=>'TOSHIBA',
            'price'=>'500',
            'category'=>'computer',
            'details'=>'is ver goood smart  computer strong screen tutch the  computer   has 12gb ram ',
            'gallery'=>'img/1.jpg'
        ]
        

       
          ] 
    
    );
    }
}

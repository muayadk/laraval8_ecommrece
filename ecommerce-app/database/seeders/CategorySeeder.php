<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('categories')->insert(
          
          [  [
            
            'cat_name'=>'mobile',
           
        ]
        ,

       
        

        [
            
            'cat_name'=>'computer',
           
        ]
        

       
          ] 
    
    );
    }
}

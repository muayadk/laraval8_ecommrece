<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('orders')->insert([
            'product_id'=>'1',
            'user_id'=>'1',
            'status'=>'pending',
            'payment_method'=>'cash',
                'payment_status'=>'pending',
                 'address'=>'ssdddd',
        ]);

       
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            
            [
            "name"=>"Keyboard",
            'price'=>'Rs.450.00',
            'description'=>'Dell Keyboard',
            'category'=>'PC',
            'gallery'=>'https://i.postimg.cc/zBzwSNCJ/1a1a8a6ede9c4cccc19cde0a34339e10.jpg',

            ],
            [
            "name"=>"VGA Card",
            'price'=>'Rs.150000.00',
            'description'=>'GTX 2060TI',
            'category'=>'PC',
            'gallery'=>'https://i.postimg.cc/5y1tF9L3/geforce-rtx-2060-super-gallery-thumbnail-c-D-2x.png',

            ],

         ] );
    }
}

<?php

use Illuminate\Database\Seeder;

class StockMobileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=0; $i < 1000; $i++) {
        DB::table('stock_mobiles')->insert(array(
            0 => 
            array(
            'id' => '8',
            'store_owner' => '17',
            'product' =>'90',
            'quantity_available' => '6',
            'sold' => '0',
            'created_at' =>'2020-06-20 06:00:00',
            'clear_status' =>'1'
        ),
        1 => 
        array(
            'id' => '9',
            'store_owner' => '17',
            'product' =>'33',
            'quantity_available' => '3',
            'sold' => '0',
            'created_at' =>'2020-06-20 06:00:00',
            'clear_status' =>'1'
        ),
        2 => 
        array(
            'id' => '10',
            'store_owner' => '18',
            'product' =>'91',
            'quantity_available' => '3',
            'sold' => '0',
            'created_at' =>'2020-06-20 06:00:00',
            'clear_status' =>'1'
        ),
        3 => 
        array(
            'id' => '11',
            'store_owner' => '18',
            'product' =>'94',
            'quantity_available' => '3',
            'sold' => '0',
            'created_at' =>'2020-06-20 06:00:00',
            'clear_status' =>'1'
        ),
        4 => 
        array(
            'id' => '12',
            'store_owner' => '18',
            'product' =>'95',
            'quantity_available' => '39',
            'sold' => '0',
            'created_at' =>'2020-06-20 06:00:00',
            'clear_status' =>'1'
        ),
        5 => 
        array(
            'id' => '13',
            'store_owner' => '18',
            'product' =>'90',
            'quantity_available' => '24',
            'sold' => '0',
            'created_at' =>'2020-06-20 06:00:00',
            'clear_status' =>'1'
        ),
        6 => 
        array(
            'id' => '14',
            'store_owner' => '18',
            'product' =>'121',
            'quantity_available' => '65',
            'sold' => '8',
            'created_at' =>'2020-06-20 06:00:00',
            'clear_status' =>'1'
        ),
        7 => 
        array(
            'id' => '15',
            'store_owner' => '18',
            'product' =>'40',
            'quantity_available' => '92',
            'sold' => '1',
            'created_at' =>'2020-06-20 06:00:00',
            'clear_status' =>'1'
        ),
        8 => 
        array(
            'id' => '16',
            'store_owner' => '18',
            'product' =>'41',
            'quantity_available' => '36',
            'sold' => '6',
            'created_at' =>'2020-06-20 06:00:00',
            'clear_status' =>'1'
        ),
        9 => 
        array(
            'id' => '17',
            'store_owner' => '18',
            'product' =>'38',
            'quantity_available' => '84',
            'sold' => '24',
            'created_at' =>'2020-06-20 06:00:00',
            'clear_status' =>'1'
        ),
        10 => 
        array(
            'id' => '18',
            'store_owner' => '18',
            'product' =>'59',
            'quantity_available' => '36',
            'sold' => '12',
            'created_at' =>'2020-06-20 06:00:00',
            'clear_status' =>'1'
        )
        )
    );
    }
// }
}

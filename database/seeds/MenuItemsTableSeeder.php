<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class MenuItemsTableSeeder extends Seeder
{
    public function run()
    {
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('rapidussd_menu_items')->truncate();

        DB::table('rapidussd_menu_items')->delete();

        DB::table('rapidussd_menu_items')->insert(array(
            array(
                'menu_id' => 1,
                'description' => 'Account Balance',
                'next_menu_id' => 2,
                'step' => 0,
                'confirmation_phrase' => '',
            ),
            array(
                'menu_id' => 1,
                'description' => 'Apply for a Loan',
                'next_menu_id' => 3,
                'step' => 0,
                'confirmation_phrase' => '',
            ),
            array(
                'menu_id' => 1,
                'description' => 'Send to Mpesa',
                'next_menu_id' => 4,
                'step' => 0,
                'confirmation_phrase' => '',
            ),
            array(
                'menu_id' => 1,
                'description' => 'Mini Statement',
                'next_menu_id' => 5,
                'step' => 0,
                'confirmation_phrase' => '',
            ),
            array(
                'menu_id' => 1,
                'description' => 'Help',
                'next_menu_id' => 7,
                'step' => 0,
                'confirmation_phrase' => '',
            ),
//            array(
//                'menu_id' => 2,
//                'description' => 'Credit Score',
//                'next_menu_id' => 7,
//                'step' => 0,
//                'confirmation_phrase' => '',
//            ),

        ));
    }
}

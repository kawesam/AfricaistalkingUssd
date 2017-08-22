<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class MenusTableSeeder extends Seeder
{
    public function run()
    {
        //menu types type 0 - authentication mini app, Type 1 - another menu mini app, type 2 leads to a process app, 3 gives information directly
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('rapidussd_menus')->truncate();

        DB::table('rapidussd_menus')->delete();

        DB::table('rapidussd_menus')->insert(array(
            array(
                'title' => 'Welcome to MLoan',
                'is_parent' => 1,
                'type' => 1,
                'confirmation_message' => "",
            ),
            array(
                'title' => 'Account Balance',
                'is_parent' => 0,
                'type' => 2,
                'confirmation_message' => "",
            ),
            array(
                'title' => 'Apply for a Loan',
                'is_parent' => 0,
                'type' => 3,
                'confirmation_message' => "",
            ),
            array(
                'title' => 'Send to Mpesa',
                'is_parent' => 0,
                'type' => 1,
                'confirmation_message' => "",
            ),
            array(
                'title' => 'Get account mini-statement',
                'is_parent' => 0,
                'type' => 2,
                'confirmation_message' => "",
            ),
            array(
                'title' => 'Help',
                'is_parent' => 0,
                'type' => 1,
                'confirmation_message' => "",
            ),
//            array(
//                'title' => 'Repay Loan',
//                'is_parent' => 0,
//                'type' => 3,
//                'confirmation_message' => "Please transfer Ksh. XX to paybill number XXXXXX to pay your loan",
//            ),


        ));
    }
}

<?php

use Illuminate\Database\Seeder;

class Transaction_TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trans = [
        	'Recharge','Purchase','Sale','Commission','Deduction','Bonus'
        ];
        for ($i=0; $i < count($trans); $i++) { 
        	DB::table('transaction_type')->insert([
        		'transaction_type_id' => uniqid('TRTY_'),
        		'transaction_name' => $trans[$i],
        		'created_at' => date("Y-m-d h:i:s"),
        		'updated_at' => date("Y-m-d h:i:s"),
        	]);
        }

    }
}

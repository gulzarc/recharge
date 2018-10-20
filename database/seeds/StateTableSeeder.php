<?php

use Illuminate\Database\Seeder;
use App\models\State;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('state')->insert(
            array(
                array('state_id' => uniqid('st_'), 'state_name' => 'Andhra Pradesh'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Arunachal Pradesh'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Assam'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Bihar'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Chhattisgarh'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Goa'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Gujarat'),
                array('state_id' => uniqid('st_'), 'state_name' => '	Haryana'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Himachal Pradesh'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Jammu & Kashmir'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Jharkhand'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Karnataka'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Kerala'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Madhya Pradesh'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Maharashtra'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Manipur'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Meghalaya'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Mizoram'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Nagaland'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Odisha (Orissa)'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Punjab'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Rajasthan'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Sikkim'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Tamil Nadu'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Telangana'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Tripura'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Uttar Pradesh'),
                array('state_id' => uniqid('st_'), 'state_name' => 'Uttarakhand'),
                array('state_id' => uniqid('st_'), 'state_name' => 'West Bengal')
    ));
    }
 
}

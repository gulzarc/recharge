<?php

use Illuminate\Database\Seeder;

class User_roleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role = [
        	'admin','master','distributor','retailor','web_user'
        ];

        for ($i=0; $i < count($user_role); $i++) { 
        	DB::table('user_role')->insert([
        		'user_role_id' => uniqid('URI_'),
        		'role_name' => $user_role[$i],
        		'created_at' => date("Y-m-d h:i:s"),
        		'updated_at' => date("Y-m-d h:i:s"),
        	]);
        }
        
    }
}

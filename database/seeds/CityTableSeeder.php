<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assam = ['Baksa','Barpeta','Biswanath','Bongaigaon','Cachar','Charaideo','Chirang','Darrang','Dhemaji','Dhubri','Dibrugarh','Dima Hasao (North Cachar Hills)','Goalpara','Golaghat','Hailakandi','Hojai','Jorhat','Kamrup','Kamrup Metropolitan','Karbi Anglong','Karimganj','Kokrajhar','Lakhimpur','Majuli','Morigaon','Nagaon','Nalbari','Sivasagar','Sonitpur',
			'South Salamara-Mankachar','Tinsukia','Udalguri','West Karbi Anglong'
        ];
        $ARUNACHAL_PRADESH = [
        	'Anjaw', 'Changlang', 'Dibang Valley', 'East Kameng', 'East Siang','Kra Daadi','Kurung Kumey','Lohit','Longding','Lower Dibang Valley','Lower Siang','Lower Subansiri','Namsai','Papum Pare','Siang','Tawang','Tirap','Upper Siang','Upper Subansiri','West Kameng','West Siang'
        ];

        $all_state = [$assam,$ARUNACHAL_PRADESH];
        $state_id = ['st_5bc9ebf69211c','st_5bc9ebf69211a'];
        for($j = 0 ; $j < count($all_state);$j++){

        	for($i = 0 ; $i < count($all_state[$j]);$i++){
        		DB::table('city')->insert([
        		'city_id' => uniqid('ct_'),
        		'state_id' => $state_id[$j],
        		'city_name' => $all_state[$j][$i],
        		'created_at' => date("Y-m-d h:i:s"),
        		'updated_at' => date("Y-m-d h:i:s"),
        		
        	]);
        	}
        	
        }
    }
}

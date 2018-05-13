<?php
use Illuminate\Database\Seeder;
class CitiesTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
	$cities = array(
				array('name' => "cairo",'country_id' => "1"),
				array('name' => "alexandria",'country_id' => "1"),
				array('name' => "suez",'country_id' => "1"),
				array('name' => "sinai",'country_id' => "1"),
				array('name' => "Plovdiv",'country_id' => "2"),
				array('name' => "Rio de Janeiro",'country_id' => "3"),
				array('name' => "Buenos Aires",'country_id' => "4"),
				array('name' => "Dhaka",'country_id' => "5"),
				array('name' => "Bogotá",'country_id' => "6"),
				array('name' => "Quito",'country_id' => "6"),
				array('name' => "Ottawa",'country_id' => "8"),
				array('name' => "Beijing",'country_id' => "9"),

		);
		DB::table('cities')->insert($cities);
	}
}
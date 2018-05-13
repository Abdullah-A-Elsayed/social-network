<?php
use Illuminate\Database\Seeder;
class CountriesTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
	$countries = array(
				array('name' => "egypt"),
				array('name' => "Bulgaria"),
				array('name' => "Brazil"),
				array('name' => "Argentina"),
				array('name' => "Bangladesh"),
				array('name' => "Colombia"),
				array('name' => "Ecuador"),
				array('name' => "Canada"),
				array('name' => "China"),

		);
		DB::table('countries')->insert($countries);
	}
}
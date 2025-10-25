<?php

namespace Database\Seeders;

use App\Models\HeadMaster;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HeadMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        HeadMaster::truncate();
        DB::statement("SET foreign_key_checks=1");
        $faker = Faker::create();
    	foreach (range(1,15) as $index) {
            DB::table('head_masters')->insert([
                'first_name' => $faker->firstName(),
                'middle_name' => $faker->lastName(),
                'last_name' => $faker->lastName(),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now')
            ]);
        }
    }
}

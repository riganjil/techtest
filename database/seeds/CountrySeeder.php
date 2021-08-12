<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert(
            [
                [
                    "country_name" => "Indonesia",
                    "region_id" => 1,
                ],
                [
                    "country_name" => "Malaysia",
                    "region_id" => 1,
                ],
                [
                    "country_name" => "Singapura",
                    "region_id" => 2
                ],
            ]
        );
    }
}

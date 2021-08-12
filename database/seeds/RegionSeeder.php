<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert(
            [
                [
                    "region_name" => "Asia Tenggara",
                ],
                [
                    "region_name" => "Asia Timur",
                ],
                [
                    "region_name" => "Asia Tengah",
                ],
            ]
        );
    }
}

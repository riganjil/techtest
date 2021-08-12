<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert(
            [
                [
                    "street_address" => "Mampang Prapatan",
                    "postal_code" => "16464",
                    "city" => "Jakarta",
                    "state_province" => "DKI Jakarta",
                    "country_id" => 1,
                ],
                [
                    "street_address" => "Duren Tiga",
                    "postal_code" => "16464",
                    "city" => "Jakarta",
                    "state_province" => "DKI Jakarta",
                    "country_id" => 1,
                ],
                [
                    "street_address" => "Tapos",
                    "postal_code" => "16464",
                    "city" => "Depok",
                    "state_province" => "Jawa Barat",
                    "country_id" => 1,
                ],
            ]
        );
    }
}

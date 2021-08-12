<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert(
            [
                [
                    "department_name" => "Technology",
                    "location_id" => 1,
                ],
                [
                    "department_name" => "Management",
                    "location_id" => 1,
                ],
                [
                    "department_name" => "Creative",
                    "location_id" => 1,
                ]
            ]
        );
    }
}

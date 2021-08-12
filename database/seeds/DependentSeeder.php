<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DependentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dependents')->insert(
            [
                [
                    "first_name" => "Andi",
                    "last_name" => "Maulana",
                    "relationship" => "Ayah",
                    "employee_id" => 1,
                ],
                [
                    "first_name" => "Indah",
                    "last_name" => "Maulani",
                    "relationship" => "Ibu",
                    "employee_id" => 1,
                ],
            ]
        );
    }
}

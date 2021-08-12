<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert(
            [
                [
                    "job_title" => "FrontEnd Engineer",
                    "min_salary" => 10000000,
                    "max_salary" => 25000000,
                ],
                [
                    "job_title" => "Backend Engineer",
                    "min_salary" => 10000000,
                    "max_salary" => 25000000,
                ],
                [
                    "job_title" => "Manager",
                    "min_salary" => 10000000,
                    "max_salary" => 25000000,
                ]
            ]
        );
    }
}

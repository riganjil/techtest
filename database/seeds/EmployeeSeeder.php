<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert(
            [
                [
                    "first_name" => "Ari",
                    "last_name" => "Maulana",
                    "email" => "ari@gmail.com",
                    "phone_number" => "089678369289",
                    "hire_date" => "2021-08-15",
                    "job_id" => 3,
                    "salary" => 25000000,
                    "manager_id" => NULL,
                    "department_id" => 2,
                ],
                [
                    "first_name" => "Andi",
                    "last_name" => "Setiawan",
                    "email" => "andi@gmail.com",
                    "phone_number" => "089678369288",
                    "hire_date" => "2021-08-15",
                    "job_id" => 1,
                    "salary" => 20000000,
                    "manager_id" => 1,
                    "department_id" => 1,
                ],
                [
                    "first_name" => "Agus",
                    "last_name" => "Iki",
                    "email" => "agus@gmail.com",
                    "phone_number" => "089678369287",
                    "hire_date" => "2021-08-15",
                    "job_id" => 1,
                    "salary" => 21000000,
                    "manager_id" => 1,
                    "department_id" => 1,
                ],
            ]
        );
    }
}

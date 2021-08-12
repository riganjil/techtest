<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(JobSeeder::class);
         $this->call(RegionSeeder::class);
         $this->call(CountrySeeder::class);
         $this->call(LocationSeeder::class);
         $this->call(DepartmentSeeder::class);
         $this->call(DependentSeeder::class);
         $this->call(EmployeeSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
/**
* Run the database seeds.
*/

public function run()
    {
        Employee::factory()->count(10)->create();
    }
}

<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeeDetailsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('employee_details')->insert([
                'employee_id' => $index,
                'experience' => $faker->numberBetween(1, 10),
                'job_title' => $faker->jobTitle,
                'job_desc' => $faker->sentence,
            ]);
        }
    }
}

<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('employees')->insert([
                'name' => $faker->name,
                'dob' => $faker->date,
                'status' => $faker->randomElement(['Active', 'Inactive']),
                'join_date' => $faker->date,
            ]);
        }
    }
}



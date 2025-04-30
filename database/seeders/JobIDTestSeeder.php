<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\JobIDTestModel;

class JobIDTestSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $faker = \Faker\Factory::create();
            JobIDTestModel::create([
                'location' => $faker->address,
                'job_name' => $faker->jobTitle,
                'job_company' => $faker->company,
                'job_id' => Str::random(10),
                'job_link' => $faker->url,

            ]);
        }
    }
}

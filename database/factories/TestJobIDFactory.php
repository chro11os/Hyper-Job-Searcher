<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Backtrace\Arguments\Reducers\StdClassArgumentReducer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TestJobIDFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location' => fake()->locale(),
            'job_name' => Str::random(10),
            'job_type' => fake()->lastName(),
            'job_id' => Str::random(12),
        ];
    }
}

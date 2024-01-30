<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseUserTable>
 */
class CourseUserTableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'completed'=>fake()->boolean(),
            'seen'=>fake()->boolean(),
            'user_id'=>fake()->numberBetween(1,31),
            'course_id'=>fake()->numberBetween(1,6)
        ];
    }
}

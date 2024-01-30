<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();
        $level = ['beginner', 'intermediate', 'professional'];
        $random = fake()->numberBetween(0,2);
        return [
            'name' => $name,
            'level'=> $level[$random],
            'c_route'=> 'php'.$name,
            'type_id' => fake()->numberBetween(1,3)
        ];
    }
}

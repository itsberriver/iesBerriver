<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'studentName' => $this->faker->name,
            'studentSurname' => $this->faker->name,
            'grades' => $this->faker->numberBetween(1, 10),
            'averege' => $this->faker->numberBetween(1, 10),
            'date_and_time' => $this->faker->dateTime,
            'semester' => $this->faker->name,
            'class' => $this->faker->name,
            'schoolYear' => $this->faker->numberBetween(1, 10),
            'makeUpTest' => $this->faker->boolean,
            'attendence' => $this->faker->boolean,
            'subject' => $this->faker->name,
        ];
    }
}

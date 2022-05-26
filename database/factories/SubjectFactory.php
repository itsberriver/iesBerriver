<?php

namespace Database\Factories;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subjectName' =>$this->faker->numberBetween(1, 10),
            'maths' =>$this->faker->numberBetween(1, 10),
            'science' =>$this->faker->numberBetween(1, 10),
            'history' =>$this->faker->numberBetween(1, 10),
            'philosophy' =>$this->faker->numberBetween(1, 10),
            'english' =>$this->faker->numberBetween(1, 10),
            'geography' =>$this->faker->numberBetween(1, 10),
            'art' =>$this->faker->numberBetween(1, 10),
        ];
    }
}

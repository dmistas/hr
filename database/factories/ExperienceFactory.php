<?php

namespace Database\Factories;

use App\Models\Cv;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_cv' => Cv::factory(),
            'organization' => $this->faker->company,
            'position' => $this->faker->jobTitle,
            'responsibility' => $this->faker->sentence,
            'start_date' => $this->faker->dateTime,
            'stop_date' => $this->faker->dateTime,
        ];
    }
}

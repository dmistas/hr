<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Cv;
use App\Models\Specialization;
use Illuminate\Database\Eloquent\Factories\Factory;

class CvFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cv::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_account' => function(){
                return Account::inRandomOrder()->first()->id;
            },
            'id_specialization' => function () {
                return Specialization::inRandomOrder()->first()->id;
            },
            'salary' => $this->faker->numberBetween(10000, 20000),
            'about' => $this->faker->sentence(6),
        ];
    }
}

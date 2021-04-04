<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Account::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'birthday' => $this->faker->date(),
            'gender' => $this->faker->randomElement([0, 1]),
            'id_city' => function(){
                return City::inRandomOrder()->first()->id;
            },
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'photo' => $this->faker->imageUrl(300, 300),

        ];
    }
}

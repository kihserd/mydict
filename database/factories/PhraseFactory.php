<?php

namespace Database\Factories;

use App\Models\Phrase;
use Illuminate\Database\Eloquent\Factories\Factory;


class PhraseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phrase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fakerRu= \Faker\Factory::create('ru_RU');

        return [
            'eng' => $this->faker->firstname,
            'rus' => $fakerRu->firstname,
            'lesson' => 1
        ];
    }
}

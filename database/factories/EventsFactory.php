<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'date' => $this->faker->dateTime(),
            'maxparticipants' => $this -> faker->numberBetween(),
            'description' => $this->faker->text(),
            'image' => $this->faker->imageUrl(),
            'isImportant' => false,
        ];
    }
}


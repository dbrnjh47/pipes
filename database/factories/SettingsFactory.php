<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SettingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'А-Изоляция test',
            'phone' => '+7' . rand(0000000000, 9999999999),
            'mail' => Str::random(5).'@doe.com',
            'address' => 'Челябинск, Свердловский тракт, test',
        ];
    }

}

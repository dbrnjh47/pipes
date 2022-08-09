<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Service;

class ServiceLotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'information' => json_encode(["ГОСТ 18599-2001", "SDR-".rand(5, 160), rand(5, 160), rand(5, 160)."м"]),
            'services_id' => Service::inRandomOrder()->first()->id,
        ];
    }
}

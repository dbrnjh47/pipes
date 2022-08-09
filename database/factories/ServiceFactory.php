<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Сatalog;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Труба ПНД для канализации '. Str::random(5),
            'img' => '/temple/pk/img/service/349bba56c6b21.png',
            'description' => 'Труба ПНД для канализации - купить оптом c доставкой по РФ и ближнему зарубежью. Цены уточняйте у менеджеров.',
            'information' => json_encode(['ГОСТ', 'Марка', 'Цена', 'Диаметр оболочки, мм']),
            'catalog_id' => Сatalog::inRandomOrder()->first()->id,
        ];
    }
}

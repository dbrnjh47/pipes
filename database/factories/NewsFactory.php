<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::random(15),
            'img' => '/temple/pk/img/news/8_марта.png',
            'short_description' => 'Милые дамы, сердечно поздравляем Вас с Международным женским днём!',
            'description' => '<p>Желаем Вам всегда быть очаровательными и нежными, чтобы Ваша жизнь была наполнена приятными событиями и счастьем, а прекрасное настроение не покидало Вас никогда!</p>
            <p>&nbsp;</p>
            <p>С праздником, дорогие женщины!</p>
            <p>&nbsp;</p>
            <p>------------------</p>
            <p>Просим обратить внимание на работу офисов и складов - 08.03.19 - 10.03.19 - являются выходными днями.</p>',
        ];
    }
}

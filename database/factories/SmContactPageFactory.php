<?php

namespace Database\Factories;

use App\Models\Model;
use App\SmContactUs;
use Illuminate\Database\Eloquent\Factories\Factory;

class SmContactPageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SmContactUs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Contact Us',
        ];
    }
}

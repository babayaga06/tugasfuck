<?php

namespace Database\Factories;

use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatakuliahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Matakuliah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "kodemk" => $this ->faker->numerify("MK###"),
            "namamk" => $this ->faker->text(30),
            "dosen" => $this ->faker->name,
            "ruang" => $this ->faker->numerify("###")
        ];
    }
}

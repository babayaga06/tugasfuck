<?php

namespace Database\Factories;

use App\Models\Regmahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegmahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Regmahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "nim" => $this -> faker->numerify("############"),
            "nama" => $this -> faker->text("50"),
            "jeniskelamin" => $this -> faker->text("10"),
            "agama" => $this -> faker->text("15"),
            "kewarganegaraan" => $this -> faker->text("5"),
            "jurusan" => $this -> faker->text("30"),
            "jenjang" => $this -> faker ->text("15"),
            "tahunakademik" => $this -> faker->numerify("######"),
            "ttl" => $this -> faker-> dateTimeThisMonth($max = 'now', $timezone = null) ,
            "alamat" => $this -> faker -> state,
            "kota" => $this -> faker -> citySuffix ,
            "kodepos" => $this -> faker -> postcode ,
            "telepon" => $this -> faker -> e164PhoneNumber ,
            "namasekolah" => $this -> faker -> text("20") ,
            "tahunmasuk" => $this -> faker -> year($max = 'now') ,
            "namaorangtua" => $this -> faker->text("50"),
            "alamatorangtua" => $this -> faker-> state ,
            "kota1" => $this -> faker -> citySuffix ,
            "kodepos1" => $this -> faker -> postcode ,
            "telepon1" => $this -> faker -> e164PhoneNumber ,
            "kodepos" => $this -> faker -> postcode ,
            "waktukuliah" => $this -> faker -> amPm ($max = 'now') ,
            "pilihmatkul" => $this -> faker -> text("20")
        ];
    }
}

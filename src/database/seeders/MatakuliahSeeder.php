<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Matakuliah::factory()->count(1000)->create();
    }
}

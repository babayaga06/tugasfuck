<?php
use App\Models\Regmahasiswa;
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegmahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Regmahasiswa::factory()->count(1000)->create();
    }
}

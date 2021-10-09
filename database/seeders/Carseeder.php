<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Carseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                cars::factory()->count(50)->create();

    }
}

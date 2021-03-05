<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sucursales;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Sucursales::factory()
        ->count(1)
        ->create();
    }
}

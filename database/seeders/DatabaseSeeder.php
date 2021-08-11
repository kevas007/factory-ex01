<?php

namespace Database\Seeders;

use App\Models\Batiments;
use App\Models\eleves;
use App\Models\Formations;
use App\Models\TypeFormations;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BatimentsSeeder::class);
        $this->call(FormationsSeeder::class);
        $this->call(TypeFormationsSeeder::class);
        // Batiments::factory()->count(10)->create();
        eleves::factory()->count(50)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(SettingsSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(CatalogsSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ServiceLotSeeder::class);
        User::factory(1)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Catalog;

class CatalogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catalog::factory(3)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceLot;

class ServiceLotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceLot::factory(15)->create();
    }
}

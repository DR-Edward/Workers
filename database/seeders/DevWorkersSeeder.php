<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Worker;

class DevWorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Worker::factory()
            ->times(15)
            ->create();
    }
}

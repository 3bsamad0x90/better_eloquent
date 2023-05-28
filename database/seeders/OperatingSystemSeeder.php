<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OperatingSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                \App\Models\OperatingSystem::factory(1000)->create();
    }
}

<?php

namespace Database\Seeders;

use Database\Seeders\RatingSeeder;
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
        // \App\Models\User::factory(10)->create();
        // $this->call([
        //     UserSeeder::class,
        //     PostSeeder::class,
        //     CommentSeeder::class,
        //     RatingSeeder::class,
        // ]);
        $this->call([
            OperatingSystemSeeder::class,
            DeviceSeeder::class,
            UserSeeder::class,
        ]);
        for($i=1 ; $i <=50; $i++){
            $this->call(BookingSeeder::class);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeSeeder::class);
        $this->call(TrackSeeder::class);
        $this->call(BusSeeder::class);
        $this->call(PositionSeeder::class);
    }
}

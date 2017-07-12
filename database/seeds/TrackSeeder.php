<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('tracks')->insert([
        	['name'=> 'Grogol - PGC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        	['name'=> 'Grogol - Sdipi', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        	['name'=> 'Grogol - JCC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    	]);
    }
}

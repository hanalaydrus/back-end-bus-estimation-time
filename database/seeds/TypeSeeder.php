<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type')->insert([
        	['name' => 'Trans Jakarta'],
        	['name' => 'Jakarta Tour Bus'],
        	['name' => 'Angkutan Kota'],
    	]);
    }
}

<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\CtrRoom::create([
            'room' => 'CL9',
            'building' => '3rd Floor',
            'description' => 'New Acad. Building'
        ]);
        
        \App\CtrRoom::create([
            'room' => 'CL10',
            'building' => '3rd Floor',
            'description' => 'New Acad. Building'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("flights")->insert([
            [
                'flight_code' => 'JT610',
                'origin'=> 'SUB',
                'destination'=> 'CGK',
                'departure_time'=> Carbon::parse('2024-10-15 09:00:00'),
                'arrival_time'=> now(),
                'created_at'=> now()
            ],
            [
                'flight_code' => 'JT611',
                'origin'=> 'SUB',
                'destination'=> 'SGP',
                'departure_time'=> Carbon::parse('2024-10-15 09:30:00'),
                'arrival_time'=> now(),
                'created_at'=> now()
            ], 
            [
                'flight_code' => 'JT612',
                'origin'=> 'SGP',
                'destination'=> 'SUB',
                'departure_time'=> Carbon::parse('2024-10-15 10:00:00'),
                'arrival_time'=> now(),
                'created_at'=> now()
            ],
            [
                'flight_code' => 'JT613',
                'origin'=> 'CGK', 
                'destination'=> 'SUB',
                'departure_time'=> Carbon::parse('2024-10-15 10:00:00'),
                'arrival_time'=> now(),
                'created_at'=> now()
            ],
            [
                'flight_code' => 'JT614',
                'origin'=> 'SUB',
                'destination'=> 'HKG',
                'departure_time'=> Carbon::parse('2024-10-15 10:30:00'),
                'arrival_time'=> now(),
                'created_at'=> now()
            ]    
        ]);
    }
}

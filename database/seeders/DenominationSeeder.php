<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // USD (United States Dollar) denominations
        DB::table('denominations')->insert([
            'code' => 'USD',
            'symbol' => '$',
            'denominations' => json_encode([10000, 5000, 2000, 1000, 500, 100, 25, 10, 5, 1]),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // EUR (European Euro) denominations
        DB::table('denominations')->insert([
            'code' => 'EUR',
            'symbol' => '€',
            'denominations' => json_encode([10000, 5000, 2000, 1000, 500, 100, 50, 20, 10, 5, 2, 1]),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // GBP (British Pound) denominations
        DB::table('denominations')->insert([
            'code' => 'GBP',
            'symbol' => '£',
            'denominations' => json_encode([10000, 5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5, 2, 1]),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // CAD (Canadian Dollar) denominations
        DB::table('denominations')->insert([
            'code' => 'CAD',
            'symbol' => '$',
            'denominations' => json_encode([10000, 5000, 2000, 1000, 500, 200, 100, 25, 10, 5]),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // MXN (Mexican Peso) denominations
        DB::table('denominations')->insert([
            'code' => 'MXN',
            'symbol' => '$',
            'denominations' => json_encode([50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50, 20, 10]),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}

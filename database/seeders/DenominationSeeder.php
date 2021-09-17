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
        // USD denominations
        DB::table('denominations')->insert([
            'currency' => 'USD',
            'symbol' => '$',
            'denominations' => json_encode([10000, 5000, 2000, 1000, 500, 100, 25, 10, 5, 1]),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}

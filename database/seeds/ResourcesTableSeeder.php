<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('resources')->insert([
        'name' => 'Cups',
        'description' => 'Nice paper cups',
        'cost' => 01.00,
        'servings' => 20,
        'expires_in_days' => 0,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
       	DB::table('resources')->insert([
        'name' => 'Sugar',
        'description' => 'sweet white powder',
        'cost' => 02.00,
        'servings' => 16,
        'expires_in_days' => 0,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
       	DB::table('resources')->insert([
        'name' => 'Ice',
        'description' => 'Solid H20',
        'cost' => 00.50,
        'servings' => 10,
        'expires_in_days' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
       	DB::table('resources')->insert([
        'name' => 'Lemons',
        'description' => 'Organic Yellow Orbs',
        'cost' => 00.10,
        'servings' => 6,
        'expires_in_days' => 0,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
       	DB::table('resources')->insert([
        'name' => 'Signs',
        'description' => 'Ballons and spray-painted carboard',
        'cost' => 00.25,
        'servings' => 1,
        'expires_in_days' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}

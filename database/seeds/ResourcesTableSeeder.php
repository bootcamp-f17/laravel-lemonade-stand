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
        'name' => 'Ice',
        'description' => 'Ice',
        'cost' => 0.50,
        'servings' => 10,
        'expires_in_days' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

	DB::table('resources')->insert([
        'name' => 'Sugar',
        'description' => 'Sugar',
        'cost' => 2.00,
        'servings' => 16,
        'expires_in_days' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

	DB::table('resources')->insert([
        'name' => 'Lemons',
        'description' => 'Lemons',
        'cost' => 0.10,
        'servings' => 5,
        'expires_in_days' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

  	DB::table('resources')->insert([
        'name' => 'Paper Cups',
        'description' => 'Paper Cups',
        'cost' => 1.00,
        'servings' => 20,
        'expires_in_days' => 7,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

	DB::table('resources')->insert([
        'name' => 'Signs',
        'description' => 'Signs',
        'cost' => 0.25,
        'servings' => 1,
        'expires_in_days' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
        //
    }
}

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
	        'description' => 'Test text 1',
	        'cost' => .50,
	        'servings' => 10,
	        'expires_in_days' => 1,
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
	      ]);

	   	DB::table('resources')->insert([
	        'name' => 'Sugar',
	        'description' => 'Test text 2',
	        'cost' => 2.00,
	        'servings' => 16,
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
	      ]);

	   	DB::table('resources')->insert([
	        'name' => 'Lemons',
	        'description' => 'Test text 3',
	        'cost' => .10,
	        'servings' => .83,
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
	      ]);

	   	DB::table('resources')->insert([
	        'name' => 'Paper Cups',
	        'description' => 'Test text 4',
	        'cost' => 1.00,
	        'servings' => 20,
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
	      ]);

	   	DB::table('resources')->insert([
	        'name' => 'Signs',
	        'description' => 'Test text 5',
	        'cost' => .25,
	        'expires_in_days' => 1,
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
	      ]);
    }
}

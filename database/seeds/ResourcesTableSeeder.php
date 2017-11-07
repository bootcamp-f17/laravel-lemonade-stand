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
        'name' => 'cups',
        'description' => 'made of paper!',
        'cost' => 1.00,
        'servings' => 20,
        'expires_in_days' => 8,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
       DB::table('resources')->insert([
        'name' => 'ice',
        'description' => 'made of water!',
        'cost' => 0.50,
        'servings' => 10,
        'expires_in_days' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
       DB::table('resources')->insert([
        'name' => 'sugar',
        'description' => 'made of NaTn, not for real!',
        'cost' => 2.00,
        'servings' => 16,
        'expires_in_days' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
       DB::table('resources')->insert([
        'name' => 'lemons',
        'description' => 'given by Life!',
        'cost' => 0.10,
        'servings' => 0.83333,
        'expires_in_days' => 8,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
       DB::table('resources')->insert([
        'name' => 'signs',
        'description' => 'made of paper!',
        'cost' => 0.25,
        'servings' => 1,
        'expires_in_days' => 8,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
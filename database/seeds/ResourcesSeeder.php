<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	 // Schema::create('resources', function (Blueprint $table) {
      //       $table->increments('id');
      //       $table->string('name');
      //       $table->text('description');
      //       $table->decimal('cost', 4, 2);
      //       $table->integer('servings');
      //       $table->integer('expires_in_days');
      //       $table->timestamps();
      //   });
       
        DB::table('resources')->insert([
        'name' => 'lemons',
        'description' => 'sour and not sweet. needs sugar.',
        'cost' => 00.50,
        'servings' => 10,
        'expires_in_days' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('resources')->insert([
        'name' => 'ice',
        'description' => 'square. made out of water.',
        'cost' => 01.00,
        'servings' => 100,
        'expires_in_days' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('resources')->insert([
        'name' => 'cups',
        'description' => 'holds liquid.',
        'cost' => 00.75,
        'servings' => 10,
        'expires_in_days' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('resources')->insert([
        'name' => 'sugar',
        'description' => 'cavaties.',
        'cost' => 01.50,
        'servings' => 20,
        'expires_in_days' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('resources')->insert([
        'name' => 'signs',
        'description' => 'heres your...',
        'cost' => 00.10,
        'servings' => 1,
        'expires_in_days' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
        
    }
}

<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('users')->insert([
		    'name' => 'Alexandre',
		    'password' => bcrypt('Alexandre'),
		    'email' => 'Alexandre@exemple.com',
		    'created_at' => Carbon\Carbon::create(),
		    'updated_at' => Carbon\Carbon::create()
	    ]);

	    DB::table('users')->insert([
		    'name' => 'Gonzo',
		    'password' => bcrypt('Gonzo'),
		    'email' => 'Gonzo@exemple.com',
		    'created_at' => Carbon\Carbon::create(),
		    'updated_at' => Carbon\Carbon::create()
	    ]);
    }
}

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
	    $imageWidth = 200;
	    DB::table('users')->insert([
		    'name' => 'Phoenix Chabot',
		    'password' => bcrypt('phoenix'),
		    'email' => 'Phoenix@exemple.com',
		    'profilePicUrl' => 'https://graph.facebook.com/v2.10/100000400011054/picture?type=square&width=' . $imageWidth,
		    'created_at' => Carbon\Carbon::create(),
		    'updated_at' => Carbon\Carbon::create()
	    ]);

	    DB::table('users')->insert([
		    'name' => 'Émilio Gonzalez',
		    'password' => bcrypt('Emilio'),
		    'email' => 'Emilio@exemple.com',
		    'profilePicUrl' => 'https://graph.facebook.com/v2.10/100001798174533/picture?type=square&width=' . $imageWidth,
		    'created_at' => Carbon\Carbon::create(),
		    'updated_at' => Carbon\Carbon::create()
	    ]);

	    DB::table('users')->insert([
		    'name' => 'Monica Martin',
		    'password' => bcrypt('Monica'),
		    'email' => 'Monica@exemple.com',
		    'profilePicUrl' => 'https://graph.facebook.com/v2.10/100000075486269/picture?type=square&width=' . $imageWidth,
		    'created_at' => Carbon\Carbon::create(),
		    'updated_at' => Carbon\Carbon::create()
	    ]);

	    DB::table('users')->insert([
		    'name' => 'Jérémy Fortier',
		    'password' => bcrypt('Jeremy'),
		    'email' => 'Jeremy@exemple.com',
		    'profilePicUrl' => 'https://graph.facebook.com/v2.10/100001919068365/picture?type=square&width=' . $imageWidth,
		    'created_at' => Carbon\Carbon::create(),
		    'updated_at' => Carbon\Carbon::create()
	    ]);
    }
}

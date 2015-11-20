<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   	DB::table('users')->truncate();

   	$id = DB::table('users')->insert([
			'email' => 'admin@gmail.com',
			'password' => bcrypt('zxcv1234'),
			'first_name' => 'admin',
			'last_name' => 'admin'
		]
	);

	$user = User::find($id);
	$user->roles()->save($id);

	DB::table('users')->insert([
			'email' => 'user@gmail.com',
			'password' => bcrypt('zxcv1234'),
			'first_name' => 'user',
			'last_name' => 'user'
		]
	);
    }
}

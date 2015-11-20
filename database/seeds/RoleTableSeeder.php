<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();

        DB::table('roles')->insert([
	        	'role_title' => 'admin',
	        	'role_slug' => 'admin'
        	]
        );

        DB::table('roles')->insert([
	        	'role_title' => 'editor',
	        	'role_slug' => 'editor'
        	]
        );
    }
}

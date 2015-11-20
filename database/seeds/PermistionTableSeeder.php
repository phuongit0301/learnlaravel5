<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PermistionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->truncate();

        DB::table('permissions')->insert([
			'permission_title' => 'admin permission',
			'permission_slug' => 'admin',
			'permission_description' => 'this is permission admin'
		]
	);

        DB::table('permissions')->insert([
			'permission_title' => 'user permission',
			'permission_slug' => 'user',
			'permission_description' => 'this is permission user'
		]
	);
    }
}

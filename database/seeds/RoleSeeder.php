<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => '2',
            'name' => 'admin',
            'display_name' => 'Admin',
        ]);

        DB::table('roles')->insert([
            'id' => '12',
            'name' => 'moderator',
            'display_name' => 'Moderator',
        ]);

        DB::table('roles')->insert([
            'id' => '22',
            'name' => 'user',
            'display_name' => 'Normal User',
        ]);
    }
}

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
            'name' => 'admin',
            'display_name' => 'Admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'moderator',
            'display_name' => 'Moderator',
        ]);

        DB::table('roles')->insert([
            'name' => 'user',
            'display_name' => 'Normal User',
        ]);
    }
}

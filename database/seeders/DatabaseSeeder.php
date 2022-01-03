<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'email' => 'user@user.com',
            'name' => 'User',
            'role' => 0,
            'password' => bcrypt('password')
        ]);
        DB::table('users')->insert([
            'email' => 'admin@admin.com',
            'name' => 'Admin',
            'role' => 1,
            'password' => bcrypt('password')
        ]);
        DB::table('users')->insert([
            'email' => 'manager@admin.com',
            'name' => 'Manager',
            'role' => 2,
            'password' => bcrypt('password')
        ]);
    }
}

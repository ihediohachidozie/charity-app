<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'System Admin',
            'email' => 'admin@moren-o.org',
            'password' => Hash::make('@secret123#'),
            'remember_token' => Str::random(10),
            'is_admin' => 1,
            'terms' => 'accepted',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

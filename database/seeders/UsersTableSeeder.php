<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::truncate();

        $admin = \App\Models\User::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'api_token' => \Illuminate\Support\Str::random(16),
        ]);

        $admin->assignRole('admin');

        $users = \App\Models\User::factory(5)->create();

        $users->each(fn ($user) => $user->assignRole('writer'));
    }
}

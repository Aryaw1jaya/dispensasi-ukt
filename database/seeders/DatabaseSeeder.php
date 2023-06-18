<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $faker = Faker::create('id_ID');

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Moderator',
            'email' => 'moderator@gmail.com',
            'role' => 'moderator',
            'password' => Hash::make('password'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Rektorat',
            'email' => 'rektorat@gmail.com',
            'role' => 'rectorate',
            'password' => Hash::make('password'),
            'created_at' => now()
        ]);
    }
}

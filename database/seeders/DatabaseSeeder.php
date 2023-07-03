<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Training;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
           UserTableSeeder::class,
           PostTableSeeder::class,
        ]);

         \App\Models\User::factory()->create([
             'name' => 'R1maro',
             'email' => 'admin@example.com',
         ]);



    }
}

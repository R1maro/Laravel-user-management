<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Training;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(100)->create();

         \App\Models\User::factory()->create([
             'name' => 'R1maro',
             'email' => 'admin@example.com',
         ]);

    }
}

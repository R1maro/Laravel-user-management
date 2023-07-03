<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\User::factory(100)->create();

        \App\Models\User::factory()->create([
            'name' => 'R1maro',
            'email' => 'admin@example.com',
        ]);
    }
}

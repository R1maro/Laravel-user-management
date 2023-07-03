<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {


//        \App\Models\Post::factory(100)->create();



        for ($i = 0; $i < 20; $i++ ){
            $p = new Post();
            $p->title = 'my title'.$i;
            $p->slug = 'my title'.$i;
            $p->body = 'body';
            $p->save();

        }
    }
}

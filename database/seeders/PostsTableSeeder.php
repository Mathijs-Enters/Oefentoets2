<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Factories\CommentFactory;
use Database\Factories\PostFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
   
    /**
     * Run the database seeds.
     */
  

     /** 
      * gpt how doe i make a seeder so that i can make a table with 0 or 5 comments
     */
    public function run(): void
    {
       Post::factory()->count(5)->create();
       Post::each(function (Post $post){
        $commentsCount = rand(0,5);
        Comment::factory()->count($commentsCount)->create();
       });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user=User::factory()->create();
         //$user=Post::factory(2)->create();
        $category=Category::factory()->create([
        ]);
        \App\Models\Post::factory(5)->create([
            "user_id"=>$user->id,
            "category_id"=>$category
        ]);
        // \App\Models\User::truncate();
        // \App\Models\Category::truncate();
        // $user=\App\Models\User::factory()->create();
        // $category=Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'
        // ]);
        // $category2=Category::create([
        //     'name'=>'Home',
        //     'slug'=>'home'
        // ]);
        // Post::create([
        //     'title'=>'my Work Post',
        //     'slug'=>'my-work-post',
        //     'body'=>'<p>Lorem ispum dollar sit emet</p>',
        //     'excerpt'=>'<p>this is my first excerpt</p>',
        //     'user_id'=>$user->id,
        //     'category_id'=>$category->id

        // ]);
        // Post::create([
        //     'title'=>'my second Work Post',
        //     'slug'=>'my-sec-work-post',
        //     'body'=>'<p>Lorem ispum dollar sit emet</p>',
        //     'excerpt'=>'<p>this is my first excerpt</p>',
        //     'user_id'=>$user->id,
        //     'category_id'=>$category->id

        // ]);
        // Post::create([
        //     'title'=>'my Home Post',
        //     'slug'=>'my-home-post',
        //     'body'=>'<p>Lorem ispum dollar sit emet</p>',
        //     'excerpt'=>'<p>this is my first excerpt</p>',
        //     'user_id'=>$user->id,
        //     'category_id'=>$category2->id

        // ]);

    }
}

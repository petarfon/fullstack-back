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
        Category::truncate();
        User::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $cat1 = Category::factory()->create();
        $cat2 = Category::factory()->create();


        Post::factory(5)->create([
            'user_id'=>$user->id,
            'category_id'=>$cat1->id,
        ]);

        Post::factory(2)->create([
            'user_id'=>$user->id,
            'category_id'=>$cat2->id,
        ]);

        // $cat3 = Category::create(['name'=>"Fun",'slug'=>'fun']);

        // $post1 = Post::create([
        //     'title'=>'Work Post',
        //     'excerpt'=>'Work Post excerpt',
        //     'body'=>'Work Post content',
        //     'slug'=>'work-post',
        //     'user_id'=>$user->id,
        //     'category_id'=>$cat2->id
        // ]);

        // $post2 = Post::create([
        //     'title'=>'Personal Post',
        //     'excerpt'=>'Personal Post excerpt',
        //     'body'=>'Personal Post content',
        //     'slug'=>'personal-post',
        //     'user_id'=>$user->id,
        //     'category_id'=>$cat1->id
        // ]);

        // $post3 = Post::create([
        //     'title'=>'Fun Post',
        //     'excerpt'=>'Fun Post excerpt',
        //     'body'=>'Fun Post content',
        //     'slug'=>'fun-post',
        //     'user_id'=>$user->id,
        //     'category_id'=>$cat3->id
        // ]);

    }
}

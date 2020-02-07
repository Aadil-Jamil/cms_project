<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = \App\Category::create([
            'name' => 'News'
        ]);

        $author1 = \App\User::create([
            'name' => 'Jhon Doe',
            'email' => 'jhon@doe.com',
            'password' => Hash::make('password'),
        ]);

        $author2 = \App\User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@doe.com',
            'password' => Hash::make('password'),
        ]);

        $category2 = \App\Category::create([
            'name' => 'Marketing'
        ]);

        $category3 = \App\Category::create([
            'name' => 'Partnership'
        ]);

        $post1 = \App\Post::create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit.',
            'contant' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg',
            'user_id' => $author1->id
        ]);

        $post2 = \App\Post::create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit.',
            'contant' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg',
            'user_id' => $author2->id
        ]);

        $post3 = \App\Post::create([
            'title' => 'Best practices for minimalist design with example',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit.',
            'contant' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg',
            'user_id' => $author1->id
        ]);

        $post4 = $author2->posts()->create([
            'title' => 'Congratulate and thank to Maryam for joining our team',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit.',
            'contant' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
            'category_id' => $category2->id,
            'image' => 'posts/4.jpg',
        ]);

        $tag1 = \App\Tag::create([
            'name' => 'job'
        ]);

        $tag2 = \App\Tag::create([
            'name' => 'customers'
        ]);

        $tag3 = \App\Tag::create([
            'name' => 'record'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);

        $post2->tags()->attach([$tag2->id, $tag3->id]);

        $post3->tags()->attach([$tag1->id, $tag3->id]);
    }
}

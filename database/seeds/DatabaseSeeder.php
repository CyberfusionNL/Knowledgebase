<?php

use App\Article;
use App\Author;
use App\Category;
use App\User;
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
        $category_1 = factory(Category::class)->create([
            'name' => 'Category 1',
        ]);

        $user_1 = factory(User::class)->create([
            'name'  => 'john',
            'email' => 'john@example.com',
        ]);
        
        $author_1 = factory(Author::class)->make([
            'name'    => 'John',
            'surname' => 'Doe',
        ]);

        $user_1->author()->save($author_1);

        factory(Article::class)->create([
            'author_id'   => $author_1->id,
            'category_id' => $category_1->id,
        ]);
    }
}

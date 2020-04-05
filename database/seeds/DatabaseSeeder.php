<?php

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(User::class)->create([
            'name'  => 'Cyberfusion',
            'email' => 'support@cyberfusion.nl',

        ]);

        $author = factory(Author::class)->make([
            'name'    => 'John',
            'surname' => 'Doe',
        ]);

        $user->author()->save($author);

        collect(['learn', 'explore', 'changes'])->each(function ($item, $key) use ($author) {
            $category = factory(Category::class)->create([
                'name' => 'Category '.$key,
                'type' => $item,
            ]);

            $child_category = factory(Category::class)->create([
                'parent_id' => $category->id,
                'name' => 'Category '.$key.' 1',
                'type' => $item,
            ]);

            factory(Article::class)->create([
                'author_id'   => $author->id,
                'category_id' => $child_category->id,
            ]);
        });
    }
}

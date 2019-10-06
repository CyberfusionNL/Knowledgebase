<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\User;
use App\Author;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class)->create([
            'name' => 'Category 1'
        ]);

        factory(User::class)->create([
            'name'  => 'john',
            'email' => 'john@example.com'
        ])->author()
          ->save(factory(Author::class)->make([
              'name'    => 'John',
              'surname' => 'Doe'
          ]));
    }
}

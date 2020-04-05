<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\User;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    private $article;
    private $author;
    private $category;
    private $user;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
        $this->author = factory(Author::class)->create([
            'user_id' => $this->user->id,
        ]);
        $this->category = factory(Category::class)->create([
            'name' => 'foobar',
        ]);
        $this->article = factory(Article::class)->create([
            'author_id' => $this->author->id,
            'category_id' => $this->category->id,
            'type' => 'learn',
        ]);
    }

    public function testGetAuthor()
    {
        $this->assertEquals(
            $this->author->id,
            $this->article->author->first()->id
        );
    }

    public function testGetCategory()
    {
        $this->assertEquals(
            $this->category->id,
            $this->article->category()->first()->id
        );
    }
}

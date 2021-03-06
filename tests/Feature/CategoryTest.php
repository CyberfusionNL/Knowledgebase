<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Article;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /** @var Category  */
    private $category;

    /** @var Category */
    private $parent;

    public function setUp(): void
    {
        parent::setUp();
        $this->parent = factory(Category::class)->create();
        $this->category = factory(Category::class)->create([
            'parent_id' => $this->parent->id,
        ]);
    }

    public function testGetArticles()
    {
        $articles = factory(Article::class, 3)->create([
            'author_id' => 1,
            'category_id' => $this->category->id,
            'type' => 'learn',
        ]);

        $this->assertEquals(
            $articles->pluck('id'),
            $this->category->articles->pluck('id')
        );
    }

    public function testGetParent()
    {
        $this->assertEquals($this->parent->id, $this->category->parent->id);
    }

    public function testGetPublicArticles()
    {
        $private = factory(Article::class)->create([
            'author_id' => 1,
            'category_id' => $this->category->id,
            'type' => 'learn',
            'state' => Article::DRAFT,
        ]);

        $public = factory(Article::class)->create([
            'author_id' => 1,
            'category_id' => $this->category->id,
            'type' => 'learn',
            'state' => Article::PUBLISHED,
        ]);

        $this->assertNotEquals(
            [$private->id],
            $this->category->public_articles->pluck('id')->all()
        );

        $this->assertEquals(
            [$public->id],
            $this->category->public_articles->pluck('id')->all()
        );
    }
}

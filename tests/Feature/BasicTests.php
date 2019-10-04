<?php

namespace Tests\Feature;

use App\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test home page
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Find everything you need to now');
    }

    public function testSlugs()
    {
        $article = Article::get()->random();
        $response = $this->get(route('article', ['type' => $article->type, 'slug' => $article->slug]));
        $response->assertStatus(200);
        $response->assertSeeText($article->title);
        $response->assertSeeText(Str::substr($article->body, 0, 25));

        $response = $this->get(route('article', ['type' => 'learn', 'slug' => 'non-existent']));
        $response->assertNotFound();
    }

    public function testSearch()
    {
        //
    }
}

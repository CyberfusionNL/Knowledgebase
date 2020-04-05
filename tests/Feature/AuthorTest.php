<?php

namespace Tests\Feature;

use App\Models\Author;
use App\Models\User;
use Tests\TestCase;

class AuthorTest extends TestCase
{
    private $author;
    private $user;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
        $this->author = factory(Author::class)->create([
            'user_id' => $this->user->id,
        ]);
    }

    public function testGetUser()
    {
        $this->assertEquals(
            $this->user->id,
            $this->author->user->first()->id
        );
    }

    public function testGetUserAttribute()
    {
        $this->assertEquals(
            $this->user->id,
            $this->author->getUserAttribute()->first()->id
        );
    }
}

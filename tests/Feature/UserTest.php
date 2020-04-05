<?php

namespace Tests\Feature;

use App\Models\Author;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
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

    public function testGetAuthor()
    {
        $this->assertEquals(
            $this->author->id,
            $this->user->author->first()->id
        );
    }

    public function testSettingAndRetrievingTheTwoFactorSecret()
    {
        $secret = 'foobar';
        $this->user->twofactor_secret = $secret;
        $this->assertEquals(
            $secret,
            $this->user->twofactor_secret
        );
    }
}


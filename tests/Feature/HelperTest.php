<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HelperTest extends TestCase
{
    /**
     * Test selected (form)
     *
     * @return void
     */
    public function testSelected()
    {
        $this->assertSame('selected', selected('formkey', 'formkey'));
        $this->assertNotSame('selected', selected('formkey', 'formke'));
        $this->assertSame('', selected('formkey', 'other-formkey'));
    }

    /**
     * Test user has twofactor enabled
     * @return void
     */
    public function testHasTwofactor()
    {
        $this->assertTrue(true); // Todo: testHasTwofactor
    }

    public function testGetCategories()
    {
        $this->assertTrue(true); // Todo: testGetCategories
    }

    public function testGetRouteForCategory()
    {
        $this->assertTrue(true); // Todo: testGetRouteForCategory
    }

    public function testGetSlugForType()
    {
        $this->assertTrue(true); // Todo: testGetSlugForType
    }

    public function testGetNextArticle()
    {
        $this->assertTrue(true); // Todo: testGetNextArticle
    }

    public function testHasVoted()
    {
        $this->assertTrue(true); // Todo: testHasVoted
    }

    public function testGetVote()
    {
        $this->assertTrue(true); // Todo: testGetVote
    }

    public function testGetVoteUrl()
    {
        $this->assertTrue(true); // Todo: testGetVoteUrl
    }

    public function testVote()
    {
        $this->assertTrue(true); // Todo: testVote
    }

    public function testIsActive()
    {
        $this->assertTrue(true); // Todo: testIsActive
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @test
     */

    public function a_blog_can_be_viewed()
    {
        $post = Post::first();
        $this->withoutExecptionHandling();
        $response = $this->get("/blog/".$post->id);
        $response->assertStatus(200);
    }
}

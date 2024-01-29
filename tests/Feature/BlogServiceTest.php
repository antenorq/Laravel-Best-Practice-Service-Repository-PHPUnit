<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Post;
use App\Services\BlogService;


class BlogServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }



    public function testGetAllPosts()
    {
        // Arrange: Create test data in the database using the factory
        $posts = factory(Post::class, 3)->create();

        // Act: Call the method being tested
        $blogService = new BlogService(new PostRepository());
        $result = $blogService->getAllPosts();

        // Assert: Check if the result is as expected
        $this->assertCount(3, $result);

        // Additional checks if needed
        foreach ($posts as $index => $post) {
            $this->assertEquals($post->title, $result[$index]->title);
            $this->assertEquals($post->content, $result[$index]->content);
        }
    }
}

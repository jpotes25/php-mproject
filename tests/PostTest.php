<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;
use App\Author;
use App\Category;

class PostTest extends TestCase
{
    public function test_post_created_with_params()
    {
        $userName = "David";
        $email = "jdpotesp@ut.edu.co";
        $country = "colombia";
        $author = new Author($userName, $email, $country);

        $postCategory = "PHPUnit";
        $category = new Category($postCategory);

        $post = new Post($author, $category);
        $author->addPost($post);

        $this->assertInstanceOf(Author::class, $post->getAuthor());
        $this->assertInstanceOf(Category::class, $post->getCategory());
        $this->assertInstanceOf(Post::class, $author->getPosts()[0]);
        
        $this->assertEquals(1, $author->countPosts());
    }
    public function test_add_comment_to_post()
    {
        $userName = "David";
        $email = "jdpotesp@ut.edu.co";
        $country = "colombia";
        $author = new Author($userName, $email, $country);

        $postCategory = "PHPUnit";
        $category = new Category($postCategory);
        $post = new Post($author, $category);
        $comment = new Comment();

        $post->addComment($comment);

        $this->assertEquals(1, $post->countComments());
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);

    }
}


?>
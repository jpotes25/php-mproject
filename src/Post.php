<?php

namespace App;

class Post
{
    protected $comments = [];
    protected $author;
    protected $category;

    public function __construct(Author $author, Category $category)
    {
        $this->author = $author;
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
    }

    public function countComments()
    {
        return count($this->comments);
    }

    public function getComments()
    {
        return $this->comments;
    }
}

?>
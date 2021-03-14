<?php

namespace App;


class Author extends User
{
    // Atributes

    private $posts = [];

    // Constructor

    public function __construct($userName, $email, $country)
    {
        parent::__construct($userName, $email, $country);

    }

    public function addPost($post)
    {
        array_push($this->posts, $post);
    }

    public function getPosts()
    {
        return $this->posts;
    }

    public function countPosts()
    {
        return count($this->posts);
    }
}



?>
<?php

namespace App;

class Category
{
    private $categories = [];

    public function __construct($categories)
    {
        $this->categories = $categories;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function addCategory($category)
    {
        $this->categories->array_push($category);
    }
}

?>
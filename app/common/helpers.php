<?php

use App\components\CategoriesRecursive;
use App\NewsCategories;

const BASE_URL = 'http://localhost/superfood/public/';

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function getCategory($parent_id): string
{
    $data = NewsCategories::all();
    $recursive = new CategoriesRecursive($data);
    return $recursive->categoriesRecursive($parent_id);
}
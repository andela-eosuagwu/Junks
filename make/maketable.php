<?php
ini_set('display_errors', 1);
ERROR_REPORTING(E_ALL);
require "../vendor/autoload.php";

use Emeka\Junks\Database\Migrations\CreateItemTable as Post;

$post = new Post;

var_dump($post->setUpTable());

if ($post->setUpTable())
{
    echo "done";
}
else
{
    echo "already  exists data";
}






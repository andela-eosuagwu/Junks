<?php
ini_set('display_errors', 1);

require "../vendor/autoload.php";

use Emeka\Todo\Model\Todo;
use Emeka\Todo\Database\Driver;
use Emeka\Todo\Database\Connect;
use Emeka\Todo\Database\Migrations\CreateItemTable as Post;

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






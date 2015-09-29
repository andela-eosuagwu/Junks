<?php
ini_set('display_errors', 1);

require "../vendor/autoload.php";

use Emeka\Todo\Model\Todo;
use Emeka\Todo\Database\Driver;
use Emeka\Todo\Database\Connect;
use Emeka\Todo\Database\Migrations\CreateItemTable as Post;

$todolist = new Todo();

 $data  = [ 18, "I want to eat", "i want to eat to day", "2007-12-13", "2007-12-13" ];

var_dump($todolist->createTodo( $data ));
if ($todolist->createTodo( $data ))
{
    echo "done";
}
else
{
    echo "already  exists data";
}






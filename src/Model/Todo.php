<?php

namespace Emeka\Todo\Model;

use Emeka\Todo\Database\Connect;


class Todo extends Connect
{

    public function GetTodoList( $table )
    {
        $query = "SELECT * FROM $table";
        return $this->FetchData( $query );
    }

    public function CreateTodo( $id, $title, $message, $created_at, $updated_at )
     {
        $query ="INSERT INTO ITEM ( id, title, message, created_at, updated_at)
        VALUES(  $id, $title, $message, $created_at, $updated_at )";
        return $this->FetchData( $query );
    }

    // public function CreateTodo()
    //  {
    // //     $query ="INSERT INTO ITEM ( id, title, message, created_at, updated_at)
    // //     VALUES( 5, 'title', 'dsfvdfJJJvdf', '2007-12-13', '2007-12-13')";
    // //     return $this->FetchData( $query );

    //     $arrayName =[
    //     'id' => '6', 'title' => 'fvdfvkdjfkj' ];
    //     foreach ( $arrayName as $key => $value)
    //     {
    //         return  $arrayName;
    //         //return  $key. " " .$arrayName['id'];
    //     }
    // }

}

<?php

namespace Emeka\Junks\Model;

use Emeka\Junks\Base\BaseClass;
use Emeka\Junks\Database\Connections\Connect;


class Todo extends Connect
{

    public function getTodoList( $table )
    {
        $query = "SELECT * FROM $table";
        return $this->fetchData( $query );
    }

    public function createTodo()
     {
            $query ="INSERT INTO ITEM ( title, message, created_at, updated_at)
            VALUES('title', 'dsfvdfJJJdf', '2007-12-13', '2007-12-13')";
            return $this->fetchData( $query );
    }


    // public function createTodo( array $values_to_be_inserted )
    //  {
    //     list( $id, $title, $message, $created_at, $updated_at ) = $values_to_be_inserted;
    //     $query ="INSERT INTO ITEM ( id, title, message, created_at, updated_at)
    //     VALUES( $id, $title, $message, $created_at, $updated_at )";
    //     return $this->FetchData( $query );
    // }
}

<?php

namespace Emeka\Junks\Database\Migrations;

use PDO;
use Emeka\Junks\Database\Migrations;
use Emeka\Junks\Database\Connections\Connect;

class CreateItemTable extends Connect
{

    public function setUpTable()
    {
        $db = $this->connect();
        $table = "item";
        try
        {
            $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $sql ="CREATE table $table
            (
                ID              SERIAL PRIMARY KEY     NOT NULL,
                TITLE           VARCHAR ( 50 )      NOT NULL,
                MESSAGE         VARCHAR ( 50 )      NOT NULL,
                CREATED_AT      DATE                NOT NULL,
                UPDATED_AT      DATE                NOT NULL
            );";

            $db->exec($sql);
            echo " =>>>>>>>>>>>>>>>>>>>> Table " . $table . " Successfull Create <<<<<<<<<<<<<<<<<<<<=";
        }

        catch(PDOException $e)
        {
            echo $e->getMessage('');
        }
    }

    public function PullDown ()
    {

    }



}
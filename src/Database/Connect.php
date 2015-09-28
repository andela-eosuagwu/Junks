<?php
namespace Emeka\Todo\Database;
use PDO;
/**
*
*/
class Connect extends Driver
{
    protected $GetDriver;

    protected $db_connection;

    protected function GetDriver()
    {
        return $this->UseDriver();
    }

    protected function Connect()
    {
        $db_host        =  $this->GetDriver()["db_host"];
        $db_name        =  $this->GetDriver()["db_name"];
        $db_user        =  $this->GetDriver()["db_user"];
        $database       =  $this->GetDriver()["database"];
        $db_password    =  $this->GetDriver()["db_password"];

        $db_connection = new PDO
        (
            $database .
            ":host = $db_host;
            dbname=" . $db_name,
            $db_user,
            $db_password
        );

        return $db_connection;
    }

    public function FetchData ( $query )
    {
        $db_connection = $this->Connect();

        if ( ! $db_connection )
        {
            echo "Error : Unable to open database\n";
        }

        $data = $db_connection->prepare($query);
        $data->execute();
        return $data->fetchAll();
    }
}

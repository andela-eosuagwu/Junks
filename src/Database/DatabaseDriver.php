<?php
namespace Emeka\Todo\Database;
use PDO;

class Driver
{

    protected $driver = [
        "database"      => "pgsql",
        "db_name"       => "todo",
        "db_user"       => "postgres",
        "db_password"   => "Olanicmi2013",
        "db_host"       => "localhost"
    ];

    public function UseDriver()
    {
        //$data = implode(',', $this->driver);
        $driver  = $this->driver;
        return $driver;
    }

}

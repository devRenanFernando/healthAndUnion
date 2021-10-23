<?php
class Connection
{
    // Attributes
    private $host, $user, $password, $db, $connection;

    // Construct
    public function __construct($host, $user, $password, $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db;
    }

    // Methods
    public function connect()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->db);

        if ($this->connection->connect_errno) {
            return false;
        } else {
            mysqli_query($this->connection, "SET NAMES 'UTF-8';");
            return true;
        }
    }

    public function executeQuery($sql)
    {
        return mysqli_query($this->connection, $sql);
    }

    public function validationUser($query)
    {
        $lines = $this->executeQuery($query);
        return mysqli_fetch_row($lines);
    }

    public function FirstRegister($query)
    {
        $lines = $this->executeQuery($query);

        return mysqli_fetch_array($lines);
    }
}

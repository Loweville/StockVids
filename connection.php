<?php

class Connection    {
    private $sname;
    private $suser;
    private $pass;
    private $dbname;

    private $conn;

    public function __construct()
    {
        $this->sname = "servername";
        $this->suser = "username";
        $this->pass = "password";
        $this->dbname = "databasename";

        $this->connect();
    }

    public function connect()
    {
        $this->conn = new mysqli($this->sname, $this->suser, $this->pass, $this->dbname);

        if($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }
}

?>
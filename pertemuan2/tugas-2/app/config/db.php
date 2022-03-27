<?php

class Connection
{
    public function get_conn()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbms = 'stream';
    
        $conn = new mysqli($host,$user,$pass,$dbms);
    
        if ($conn->connect_error) {
            die("Could not connect to database: " . $conn->connect_error);
        }else{
            return $conn;
        }
    }
    
}

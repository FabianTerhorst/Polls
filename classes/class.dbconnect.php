<?php
class dbConnect {
    function __construct() {
        $conn = mysql_connect("127.0.0.1", "root", "");
        mysql_select_db("KappaPolls", $conn);
        if(!$conn)
        {
            die ("Cannot connect to the database");
        }
        return $conn;
    }
    public function Close(){
        mysql_close();
    }
}
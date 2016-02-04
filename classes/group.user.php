<?php

require_once("class.user.php");

session_start();

class Users
{

    function __construct()
    {

    }

    function login(){
        $username = $_POST["user"];
        $password = $_POST["passwd"];
        $data = mysql_query("SELECT * FROM polls_user WHERE username='$username'") or die(mysql_error());
        if (mysql_num_rows($data) == 1) {
            $row = mysql_fetch_assoc($data);
            if (password_verify($password, $row['password'])) {
                $_SESSION['user'] = $row['id'];
                //$_COOKIE['user'] = $row['id'];
                //setcookie("user", $row['id']);
            }
        }
        header("Location: http://localhost:1026/");
    }

    function register(){
        $username = $_POST["user"];
        $password = password_hash($_POST["passwd"], PASSWORD_DEFAULT);
        $data = mysql_query("INSERT INTO polls_user (username, password) VALUES ('" .$username ."', '" .$password ."')") or die(mysql_error());
        if($data){
            $id = mysql_insert_id();
            $_SESSION['user'] = $id;
            //$_COOKIE['user'] = $id;
            //setcookie("user", $id);
        }
        header("Location: http://localhost:1026/");
    }
}
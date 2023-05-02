<?php


  function make_connection(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname="todoapp";
    $con =  mysqli_connect($host,$username,$password,$dbname);
    if($con->connect_error)
    {
    echo " there is an error";
    }
    echo "successfully";
  }

?>
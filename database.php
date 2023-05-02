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
    //echo "successfully";
    return $con;
  }
function add_items($value)
{
 $con = make_connection();
 $query = "INSERT INTO todolist(id,item,status)VALUES(NULL,'$value','0')";
 $con->query($query);
}
function get_items()
{
    $con = make_connection();
    $query = " select id,item from todolist where status='0'";
   $result =  $con->query($query);
   //print_r($result);
   return $result;
}
?>
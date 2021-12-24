<?php

$server='localhost';
$username='root';
$password='';
$dbname='basicbankingsystem';

$conn=mysqli_connect($server,$username,$password,$dbname);



if($conn)
{
    // connection established!
}
else
{
    die('connection failed due to'.mysqli_connect_error());
}
?>
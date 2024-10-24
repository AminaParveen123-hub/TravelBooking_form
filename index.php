<?php

$servername="localhost";
$username="root";
$password="";
$dbname="bookings";
$conn=new mysqli($servername,$username,$password,$dbname);
if(
    $conn->connect_error){
        die("Connection Failed:" .$conn->connect_error);


    }
// Handle form submission
if($_SERVER["REQUEST_MATHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $destination=$_POST["destination"];
    $departure_date=$_POST["departure_date"];
    $return_date=$_POST["return_date"];

    //perpare and execute
    $sql=


}
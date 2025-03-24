<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];


$conn= new mysqli('localhost','root','bal123','page');

if($conn->connect_error){
    die('connection failed:' .$conn->connect_error); 
}
else{
    
    $stmt=$conn->prepare("insert into user(firstname,lastname,username,city,state,zip) values (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss",$firstname,$lastname, $username, $city, $state, $zip);
    $stmt->execute();
    echo"submited successfully";
    $stmt->close();
    $conn->close();
}


?>

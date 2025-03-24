<?php
$servername = '127.0.0.1:3307';
$username = 'root';
$password = '';
$dbname = 'page';
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "page");

if ($conn === false) {
    die("ERORR: connection failed" . mysqli_connect_error());
}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobilenumber = $_POST['mobilenumber'];
$sts = $_POST['state'];
$state = $_POST['city'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

$sql = "INSERT INTO user('firstname','lastname','mobilenumber','state','city','gender','email','password','confirmpassword') VALUES ('$firstname','$lastname','$mobilenumber','$state','$city','$gender','$email','$password','$confirmpassword')";

if (mysqli_query($conn, $sql)) {
    echo " data storage successfully in database";
    echo nl2br("\n$firstname\n$lastname\n$mobilenumber\n$state\n$city\n$gender\n$email\n$password\n$confirmpassword");

} else {
    echo "ERROR: Hush! sorry $sql."
        . mysqli_error($conn);
}
mysqli_close($conn);


?>
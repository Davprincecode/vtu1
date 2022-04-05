<?php
include "connection.php";
if (isset($_POST['submit'])) {
 $email = $_POST['email']; 
 $fullname = $_POST['fullname']; 
 $password = $_POST['password']; 
$query = "INSERT INTO register (email, fullName, password) VALUES (' $email', ' $fullname', ' $password')";
$result = mysqli_query($con, $query);
if($result){
 header("location: form.php");
}else{
echo failed; 
}
}
?>
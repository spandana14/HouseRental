<?php
$conn=mysqli_connect("localhost","root","root","Rent");
 
if(isset($_GET['submit'])){
 $firstname=$_GET['fname'];
 $lastname =$_GET ['lname'];
 $email = $_GET['email'];
 $username = $_GET['username'];
 $password = $_GET['password'];
 $address = $_GET['address'];
 $zipcode = $_GET['zipcode'];
 $phonenumber = $_GET ['phno'];
$check_email = $conn->query("SELECT email FROM register WHERE email='$email'");
 $ecount=$check_email->num_rows;
 $check_username = $conn->query("SELECT username FROM register WHERE username='$username'");
 $ucount=$check_username->num_rows;
 
 
 if ($ucount==0)
 if($ecount==0) 
 {
 $conn->query("INSERT INTO register VALUES('$firstname','$lastname','$username','$password','$email','$phonenumber','$address','$zipcode')");
 }
 else
  echo "sorry email already taken";
 else
  echo "user name already exists.... Try again";
  }
else
echo "error";
header('Location:login.html');
  ?>

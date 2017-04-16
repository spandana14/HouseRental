<?php
$con=mysqli_connect("localhost","root","root","Rent");
$uname=$_GET['username'];
$pass=$_GET['password'];
$qry=$con->query("SELECT username,password FROM register WHERE username='$uname'");
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
   $row=mysqli_fetch_array($qry);
if($uname==$row['username'] && $pass==$row['password'])
    {
header('Location:property.html'); 
    }
else
    {
header('Location:login.html');
        }
  }
  ?>

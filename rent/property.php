<?php

$conn=mysqli_connect("localhost","root","root","Rent");
if(isset($_GET['submit'])){
 $username =$_GET['username'];
 $propertyid = $_GET['propertyid'];
 $housetype = $_GET['housetype'];
 $Address=$_GET['address'];
 $zipcode = $_GET['zipcode'];
 $rent = $_GET['rent'];
 $shortdescription =$_GET['shortdescription'];
 $AC =$_GET['AC'];
 $Microwave =$_GET['Microwave'];
 $fireplace =$_GET['fireplace'];
 $washerdryer =$_GET['washerdryer'];
 $balcony =$_GET['balcony'];
 $size =$_GET['size'];
 $numbedrooms =$_GET['numbedrooms'];
$check_id = $conn->query("SELECT * FROM property WHERE propertyid='$propertyid'");
 $ecount=$check_id->num_rows;
 
 if($ecount==0) 
 $conn->query("INSERT INTO register VALUES('$username','$propertyid','$housetype','$Address','$zipcode','$rent','$shortdescription','$AC','$Microwave','$fireplace','$washerdryer','$balcony','$size','$numbedrooms'");
 else
  echo "Property id already exists.... Try again";
echo "saved your data ";
echo "<a href=\"main.html\">GO TO HOME</a>";
  
  }
else
echo "error";
  ?>










<?php
$con=mysqli_connect("localhost","root","root","Rent");
if(isset($_GET['submit'])){
$zipcode=$_GET['zipcode'];
$from=$_GET['from'];
$to=$_GET['to'];
$numbedrooms=$_GET['numbedrooms'];

$qry=$con->query("SELECT r.*,p.* FROM register AS r RIGHT JOIN property AS p ON  p.zipcode='$zipcode' AND p.rent>='$from' AND p.rent<='$to' AND p.numbedroom='$numbedrooms' AND r.username=p.username");
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
   $row=mysqli_fetch_array($qry,MYSQLI_ASSOC);
  
}
}
 ?>
 <center>

<table border="0">
<tbody>
<tr><td><h2> Property details</h2></td></tr>
<tr><td><label>Property ID &type: </td></label><td><?php echo "$row[propertyid]"  ?>:<?php echo "$row[housetype]" ?></td><tr>
<tr><td><label>size: </td></label><td> <?php echo "$row[size]"  ?>sq.feet</td><tr>
<tr><td><label>Rent:</td></label><td> $<?php echo "$row[rent]"  ?></td><tr>
<tr><td><label>Address:</td></label><td><?php echo "$row[address]"  ?>-<?php echo "$row[zipcode]"  ?></td><tr>
<tr><td><label>Description:</td></label><td><?php echo "$row[shortdescription]"  ?></td><tr>
<tr><td><h2> owner details</h2></td></tr>
<tr><td><label>Name:</td></label><td><?php echo "$row[firstname]" ?></td><tr>
<tr><td><label>email:</td></label><td><?php echo "$row[email]"  ?></td><tr>
<tr><td><label>Phone Number:</td></label><td><?php echo "$row[phonenumber]"  ?></td><tr>
</tbody>
</table>
 </center>

<?php
$type = $_POST['type'];
$city = $_POST['city'];
$postal = $_POST['postal'];
$connect = new mysqli("localhost","root",'',"db");
$sql = "select * from table2 where type='$type',city='$city',postal='$postal' ";
$ans = $connect->query($sql);
if($ans->num_rows>=1)
{
  echo "<table border=2>";
  echo "<tr><th>type</th><th>carname</th><th>carnumber</th><th>carphoto</th><th>housenumber</th></tr>";
  echo "<tr><th>city</th><th>postalcode</th><th>firstname</th>phonenumber<th></th><th>ownerimage</th></tr>";
  while($row = $result->fetch_assoc())
  {
    echo "<tr><td>".$row['type']."</td><td>".$row['carname']."</td><td>".$row['carno']."</td><td><img src=".$row['carphoto']."width=50 height=50></td><td>".$row['houseno']."</td></tr>";
	echo "<tr><td>".$row['city']."</td><td>".$row['postal']."</td><td>".$row['fname']."</td><td>".$row['pn']."</td><td><img src=".$row['yp']."width=50 height=50></td></tr>";
   }
   echo "</table>";
}
else
{
  echo "no records found";
}
?>
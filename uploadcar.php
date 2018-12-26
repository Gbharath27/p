
<?php
if(isset($_POST['submit']))
{
  $type=$_POST['type'];
  $carname=$_POST['carname'];
  $carno=$_POST['carno'];
  $carphoto=$_POST['carphoto'];
  $hn=$_POST['houseno'];
$city=$_POST['city'];
  $postal=$_POST['postal'];
  $fname=$_POST['fn'];
  $lname=$_POST['ln'];
  $pno=$_POST['pn'];
  $yphoto=$_POST['yp'];
  $connect = new mysqli("localhost","root",'',"db");
  $sql = "insert into car(type,carname,carno,carphoto,houseno,city,postal,fn,ln,pn,yp) values ('$type','$carname','$carno','$carphoto','$hn','$city','$postal','$fname','$lname','$pno','$yphoto')";
  if($connect->query($sql)===true)
  {  
    echo "details entered into the database successfully";
  }
  else
  {
    echo "Error:".$sql."<br>".$connect->error;
  }
  $connect->close();
}
?>
  


<?php
if(isset($_POST['submit']))
{
  $title=$_POST['title'];
  $publisher=$_POST['publisher'];
  $edition=$_POST['edition'];
  $price=$_POST['price'];
  $image=$_POST['image'];
  $connect = new mysqli("localhost","root",'',"");
  $sql = "insert into table2(title,publisher,edition,price,image) values ('$title','$publisher','$edition','$price','$image')";
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
  

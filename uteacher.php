<?php
  
$email = $_POST['email'];
$name = $_POST['name'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$image = $_POST['image'];
$address = $_POST['address'];


include("connect.php"); 

$sql ="UPDATE teacher SET name='$name',number='$number',gender='$gender',qualification='$qualification',address ='$address',image='$image' WHERE email='$email'";

if ($conn->query($sql)===TRUE) 
{
  echo "Data is updated";
  header('Refresh:2; URL=teachercart.php');
  
  
}
  ?>
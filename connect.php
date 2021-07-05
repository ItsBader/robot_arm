<?php
$myRange = $_POST['myRange'];
$myRange2 = $_POST['myRange2'];
$myRange3 = $_POST['myRange3'];
$myRange4 = $_POST['myRange4'];
$myRange5 = $_POST['myRange5'];
$myRange6 = $_POST['myRange6'];


$conn = new mysqli('localhost','root,'','test');
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into regestration(myRange,myRange2,myRange3,myRange4,myRange5,myRange6)
  values(?,?,?,?,?,?)");
  $stmt->bind_param("iiiiii", $myRange,$myRange2,$myRange3,$myRange4,$myRange5,$myRange6);
  $stmt->executre();
  echo "Data Saved";
  $stmt ->close();
  $conn->close();
}

 ?>

<?php

session_start();

include("config.php");

?>

<html>

<head>

</head>

<body>

    <h1> <CENTER>SALES INFORMATION STORAGE</CENTER></h1>

    

<form method="post">

 Showroom ID:   <input type="text" name="sid"/>

     <br><br>

    Footwear ID: <input type="text" name="fid" /><br><br>

   
    Number of footwear sold : <input type="text" name="nos"/><br><br>
    
  

  
    <input type="submit" name="submit" />

        </form>

    </body>

  <?php  

$link=connecttodb();

if(isset($_POST['submit']))

{

 $Sid="";$Fid="";$NOS="";

    $Sid=$_POST['sid'];

    $Fid=$_POST['fid'];

   $NOS=$_POST['nos'];
    

    $sql="INSERT INTO manufacturer 

 

VALUES

 

('$Sid','$Fid','$NOS')";

 

 

if (!mysqli_query($link,$sql))

 

  {

 

  die('Error: ' . mysql_error());

 

  }

$msg="1 record added";

echo "<script type='text/javascript'>alert('$msg');</script>";

}

    ?>

    

</html> 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
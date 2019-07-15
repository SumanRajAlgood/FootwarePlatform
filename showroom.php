<?php

session_start();

include("config.php");

?>

<html>

<head>

</head>

<body>

    <h1> <CENTER>SHOWROOM INFORMATION STORAGE</CENTER></h1>

    

<form method="post">

 Showroom ID:   <input type="text" name="sid" required/>

     <br><br>

    Showroom name: <input type="text" name="sname" required /><br><br>

   
    Showroom Address : <input type="text" name="saddress" required/><br><br>
    
  

  
    <input type="submit" name="submit" />

        </form>

    </body>

  <?php  

$link=connecttodb();

if(isset($_POST['submit']))

{

 $Sid="";$Sname="";$Saddress="";

    $Sid=$_POST['sid'];

    $Sname=$_POST['sname'];

   $Saddress=$_POST['saddress'];
    

    $sql="INSERT INTO showroom

 

VALUES

 

('$Sid','$Sname','$Saddress')";

 

 

if (!mysqli_query($link,$sql))

 

  {

 

  die('Error: ' . mysql_error());

 

  }

$msg="1 record added";

echo "<script type='text/javascript'>alert('$msg');</script>";

}

    ?>

    

</html> 
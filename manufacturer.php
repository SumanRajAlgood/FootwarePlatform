<?php

session_start();

include("config.php");

?>

<html>

<head>

</head>

<body>

    <h1> <CENTER>MANUFACTURER INFORMATION STORAGE</CENTER></h1>

    

<form method="post">

 Manufacturer ID:   <input type="text" name="mid" required/>

     <br><br>
    
     Showroom ID:   <input type="text" name="sid" required/>

     <br><br>


    Manufacturer name: <input type="text" name="mname" required/><br><br>

   
    Manufacturer Address : <input type="text" name="maddress" required/><br><br>
    
  

  
    <input type="submit" name="submit" />

        </form>

    </body>

  <?php  

$link=connecttodb();

if(isset($_POST['submit']))

{

 $Mid="";$Sid="";$Mname="";$Maddress="";

    $Mid=$_POST['mid'];

     $Sid=$_POST['sid'];

    $Mname=$_POST['mname'];

   $Maddress=$_POST['maddress'];
    

    $sql="INSERT INTO manufacturer 

 

VALUES

 

('$Mid','$Sid','$Mname','$Maddress')";

 

 

if (!mysqli_query($link,$sql))

 

  {

 

  die('Error: ' . mysql_error());

 

  }

$msg="1 record added";

echo "<script type='text/javascript'>alert('$msg');</script>";

}

    ?>

    

</html> 
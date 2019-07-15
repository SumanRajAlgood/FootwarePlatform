<?php

session_start();

include("config.php");

?>

<html>

<head>

</head>

<body>

    <h1> <CENTER>ORDER INFORMATION STORAGE</CENTER></h1>

    

<form method="post">

Order ID:   <input type="text" name="oid"/>

     <br><br>
    
  Customer ID: <input type="text" name="cid" required/><br><br>
    

 
 Footwear ID : <input type="text" name="fid" required/><br><br>
    

Date Of Purchase:<input type="text" name="dop" required/>

    <br><br>
    
    
    <input type="submit" name="submit" />

        </form>

    </body>

  <?php  

$link=connecttodb();

if(isset($_POST['submit']))

{

 $Oid="";$Cid="";$Fid="";$DOP="";
    
    $Oid=$_POST['oid'];
    
    $Cid=$_POST['cid'];
    
    $Fid=$_POST['fid'];

    $DOP=$_POST['dop'];


   

    

$sql="INSERT INTO order 

 

VALUES

 

('$Oid','$Cid','$Fid','$DOP')";

 

 

if (!mysqli_query($link,$sql))

 

  {

 

  die('Error: ' . mysql_error());

 

  }

$msg="1 record added";

echo "<script type='text/javascript'>alert('$msg')</script>";

}

    ?>

    

</html> 
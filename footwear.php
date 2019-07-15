<?php

session_start();

include("config.php");

?>

<html>

<head>

</head>

<body>

    <h1> <CENTER>FOOTWEAR INFORMATION STORAGE</CENTER></h1>

    

<form method="post">

 Footwear ID:   <input type="text" name="fid" required/>

     <br><br>
    
    Manufacturer ID: <input type="text" name="mnumber" required/><br><br>
    

 
 Footwear Cost : <input type="text" name="fcost" required/><br><br>


Footwear Stock: <select name="fstock" required>

    <option value="Y">Y</option>

    <option value="N">N</option>

    </select><br><br>


 
  
    <input type="submit" name="submit" />

        </form>

    </body>

  <?php  

$link=connecttodb();

if(isset($_POST['submit']))

{

 $Fid="";$Mnumber="";$Fcost="";$Fstock="";
    $Fid=$_POST['fid'];
    
    $Mnumber=$_POST['mnumber'];
   
     $Fcost=$_POST['fcost'];

    $Fstock=$_POST['fstock'];


   

    

$sql="INSERT INTO footwear 

 

VALUES

 

('$Fid','$Mnumber','$Fcost','$Fstock')";

 

 

if (!mysqli_query($link,$sql))

 

  {

 

  die('Error: ' . mysql_error());

 

  }

$msg="1 record added";

echo "<script type='text/javascript'>alert('$msg')</script>";

}

    ?>

    

</html> 
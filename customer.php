<?php

session_start();

include("config.php");

?>

<html>

<head>

</head>

<body>

    <h1> <CENTER>CUSTOMER INFORMATION STORAGE</CENTER></h1>

    


<form method="post">

    Customer ID: <input type="text" name="cid" required /><br><br>
    
    Customer Name: <input type="text" name="cname" pattern="[A-Za-z]+" required /><br><br>

    Phone Number: <input type="number" name="cphone" required/><br><br>

    Customer Email-id:  <input type="email" name="cemail"  required/><br><br>

    Customer Address : <input type="text" name="caddress" required/><br><br>
    
    

    

    <input type="submit" name="submit" />

        </form>

    </body>

  <?php  


   $link =connecttodb();
    

if(isset($_POST['submit']))

{
    
 $Cid="";$Cname="";$Cphone="";$Cemail="";$Caddress="";

    $Cid=$_POST['cid'];
    
    $Cname=$_POST['cname'];

     $Cphone=$_POST['cphone'];

     $Cemail = $_POST["cemail"];

   $Caddress=$_POST['caddress'];

    
   

$sql="INSERT INTO customer 

 

VALUES

 

('$Cid','$Cname','$Cphone','$Cemail','$Caddress');";

if(!mysqli_query($link,$sql))
    
{
    die('Error: ' . mysql_error()); 
    
}

   
    $msg="1 record added";

echo "<script type='text/javascript'>alert('$msg');</script>";
        
}
   /*$sql="SELECT max(cid)+1 from customer;";
    if($result=mysqli_query($link,$sql))
    {
        while($row=mysqli_fetch_row($result))
        {
            printf("YOUR UNIQUE ID IS: %s \n",$row[0]);
            printf("YOUR PASSWORD IS: %s \n",$row[0]);
        }
        mysqli_free_result($result);
        
        
    }
    
}
  
  */
?>
    
</html> 
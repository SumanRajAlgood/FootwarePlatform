<html>
<head>
<style>
     body{  background-image:  url("http://localhost/bgf.jpeg.jpg"); }
    
table {
     border: 1px solid black;
   
    width: 100%;
}

     #table-4 #r1 {color: white;
        background-color: darkgreen;}

    #head1 { 
        text-align: center;
background-color: yellow;
font-family: arial, sans-serif;
font-weight: bold;
margin-top: 0px;
        margin-bottom: 1px;}
    
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
font-weight: bold;
}
    td {
  font-size: 24px;
}

    
tr:hover {background-color:#f5f5f5;}
</style>
</head>
<body>
    <h1 id='head1'>ORDER DETAILS: </h1>
<?php
    include("config.php");
    session_start();
      $link=connecttodb();
 
       $y="CALL `getord`();";
    $result=$link->query($y);
    if($result->num_rows>0){
        
        echo "<table  id='table-4' border='1'>";
        echo "<tr id ='r1'><td><strong>ORDER ID:</strong></td><td><strong>CUSTOMER ID:</strong></td><td><strong>FOOTWEAR ID: </strong></td><td><strong>DATE OF PURCHASE:</strong></td></tr>";
        while($row=$result->fetch_assoc())
        {
            echo"<tr><td>{$row["oid"]}</td><td>{$row["cid"]}</td><td>{$row["fid"]}</td><td>{$row["dop"]}</td></tr>";
           
        }
        
        echo"</table>";
    } 

    
?>

</body>
</html>
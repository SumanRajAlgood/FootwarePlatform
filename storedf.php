<html>
<head>
<style>
    body{  background-image:  url("http://localhost/bgf.jpeg.jpg"); }
table {
     border: 1px solid black;
   /* border-collapse: collapse;*/
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
 th,td {
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
     font-weight: bold;
}
    td {
  font-size: 24px;
}

tr:hover {background-color:#c2c2a3;}
</style>
</head>
<body>
    <h1 id='head1' >FOOTWEAR DETAILS: </h1>
<?php
    include("config.php");
    session_start();
      $link=connecttodb();
 
       $y="CALL `getfoot`();";
    $result=$link->query($y);
    if($result->num_rows>0){
       echo "<br><br>";
        echo "<table id='table-4' border='1'>";
        echo "<tr id ='r1'><td><strong>FOOTWEAR ID:</strong></td><td><strong>MANUFACTURER NUMBER:</strong></td><td><strong>FOOTWEAR COST:</strong></td><td><strong>FOOTWEAR AVAILABILITY:</strong></td></tr>";
        while($row=$result->fetch_assoc())
        {
           /*echo "FOOTWEAR ID: ".$row["fid"]." "."MANUFACTURER NUMBER: ".$row["mnumber"]." "."FOOTWEAR COST: ".$row["fcost"]." "."FOOTWEAR AVAILABILITY:  ".$row["fstock"];*/
            
            echo"<tr><td>{$row["fid"]}</td><td>{$row["mnumber"]}</td><td>{$row["fcost"]}</td><td>{$row["fstock"]}</td></tr>";
            
        }
        echo"</table>";
    } 

    
?>
    
    
    </body>
</html>
    
    
    
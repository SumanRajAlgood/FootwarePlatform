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

    #head2 { 
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
    
tr:hover {background-color:#c2c2a3;}
</style>
</head>
<body>
    <h1 id=head2>MANUFACTURER DETAILS: </h1>
<?php
    include("config.php");
    session_start();
      $link=connecttodb();
 
       $y="CALL `getmanu`();";
    $result=$link->query($y);
    
    echo "<table id='table-4' border='1'>";
        echo "<tr id='r1'><td><strong>MANUFACTURER ID:</strong></td><td><strong>MANUFACTURER NAME:</strong></td><td><strong>MANUFACTURER ADDRESS:</strong></td></tr>";
    if($result->num_rows>0){
        
        echo "<br><br>";
        while($row=$result->fetch_assoc())
        {
            echo"<tr><td>{$row["mid"]}</td><td>{$row["mname"]}</td><td>{$row["maddress"]}</td><td></tr>";
        }
    } 

    
    
   echo"</table>";  
    
?>
    
    </body>
</html>
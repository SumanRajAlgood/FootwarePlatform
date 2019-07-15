<!DOCTYPE HTML>
<?php
session_start();
include("config.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
        input[type=textarea], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: darkslategray;
    line-height: 1.8;
    background-color: white;
   
        }
    .bgimg-1 {
    background-image: url('https://images.unsplash.com/photo-1473010350295-2c82192ebd8e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a109d7fbb8f51e4916beaba96e42da85&auto=format&fit=crop&w=400&q=60');
    min-height: 400px;
        background-attachment: scroll;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
}    
        .w3-wide {letter-spacing: 10px;}
        tr:hover {background-color:#c2c2a3;cursor: pointer;}
         th{
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
     font-weight: bold;
}
        td{
            padding: 10px;
            text-align: center;
            border-bottom:1px solid #ddd;
        }
        home{
             background-image: url('http://localhost/bgf1.jpg');
        }
</style>
        
    </head>
<body>
    
   <div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">FILL IN THE DETAILS</a>
    <a href="#delete" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> DELETE</a>
    <a href="#update" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> UPDATE</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#home" class="w3-bar-item w3-button" onclick="toggleFunction()">FILL IN THE DETAILS</a>
    <a href="#delete" class="w3-bar-item w3-button" onclick="toggleFunction()">DELETE</a>
    <a href="#update" class="w3-bar-item w3-button" onclick="toggleFunction()">UPDATE</a>
  </div>
</div>
    <br/><br/><br/>
    <div class="bgimg-1 w3-display-container w3-opacity-min" style="width: 100%">
    </div>
    <div class="w3-content w3-container w3-padding-64" id="home">
<body>
    <header class="w3-container w3-yellow">
  <h1 style="color:darkgreen;" ><i class="fa fa-viacoin fa-fw fa-2x"></i>       ALLEN EDMOND'S FOOTWEAR COMPANY</h1><br>
</header>
<center><h2 style="color:darkgreen;">FOOTWEAR INFORMATION STORAGE</h2></center>
    <CENTER><u>Please fill in the following details with care</u></CENTER>
<br><br>
<form method="post">

Footwear ID:   <input type="text" name="fid" required/>

     <br><br>
    
    Manufacturer ID: <input type="text" name="mnumber" required/><br><br>
    

 
 Footwear Cost : <input type="text" name="fcost" required/><br><br>


Footwear Stock: <select name="fstock" required>

    <option value="Y">Y</option>

    <option value="N">N</option>

    </select><br><br>


 
  
    
  
   <input type="submit" name="submit" value= SUBMIT>
    
   
</form>

<script>
    window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}
        </script>


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
echo "<script type='text/javascript'>alert('$msg');</script>";
}
    
    ?>
    </div>
    <div class="w3-content w3-container w3-padding-64" id="update">
    <h1 style="color:darkgreen;"><center>FOOTWEAR UPDATION</center></h1>
    <form method="post">
 Enter the fid for updating<input type="text" name="fid" /> 
     <br><br>
Manufacturer ID: <input type="text" name="mnumber" required/><br><br>
    

 
 Footwear Cost : <input type="text" name="fcost" required/><br><br>


Footwear Stock: <select name="fstock" required>

    <option value="Y">Y</option>

    <option value="N">N</option>

    </select><br><br>
     
    <button name="update">UPDATE</button>
    </form>
   <?php 
       $link=connecttodb();
    if(isset($_POST['update'])){
        $Fid="";$Mnumber="";$Fcost="";$Fstock="";
    $Fid=$_POST['fid'];
    
    $Mnumber=$_POST['mnumber'];
   
     $Fcost=$_POST['fcost'];

    $Fstock=$_POST['fstock'];

        
        $sql1="UPDATE footwear set  mnumber='$Mnumber',fcost='$Fcost',fstock='$Fstock' where fid='$Fid' ";
          if (!mysqli_query($link,$sql1))

  {

  die('Error: ' . mysql_error());

  }



$msg="1 record updated";
    echo "<script type='text/javascript'>alert('$msg');</script>";
        
    
    
    }
        ?>
        </div>
         <div class="w3-content w3-container w3-padding-64" id="delete">
    <h1 style="color:darkgreen;"><center>FOOTWEAR DELETION</center></h1>
    <form method="post">
        Enter the fid for deleting<input type="text" name="dfid" /> 
     <br><br>
        <button name="delete">DELETE</button>
             </form>
             <?php 
       $link=connecttodb();
    if(isset($_POST['delete'])){
        $dFid="";
        $dFid=$_POST['dfid'];
    
 $sql2="DELETE FROM footwear WHERE fid='$dFid'";
         if (!mysqli_query($link,$sql2))

  {

  die('Error: ' . mysql_error());

  }



$msg="1 record deleted";
    echo "<script type='text/javascript'>alert('$msg');</script>";
        
    
    
    }
             ?>
   
        </div>
        
    
    </body>
   
</html>
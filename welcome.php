<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 30px;
}

.topnav a:hover {
  background-color: #ddd;
  color: white;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
    .center {
        text-align: center;
        border: 1px solid
            black;
    
    }
   
    
    <div class="Register">
    <h1>REGISTRATION FORM</h1>
       <br> <a href="http://localhost/customer.php"> </a>
       </div>
   
</style>
</head>
    

<body>
   
    
 <div style="padding-left:16px">
     <h1><center>ALLEN EDMOND'S FOOTWEAR</center></h1>
  <h2 text-align: center;>WELCOME</h2>
     
  
</div>
   
   
    
    

   
<div class="topnav">
  <a class="active" href=" http://localhost/what's new.php">What's New</a>
     <!--.topnav a {

    text-align: center;
  }-->
    <a href="http://localhost/login.php">Login</a>
    <!-- .topnav a {
    
    text-align: right;
  }-->
  
  <a href="http://localhost/register.php">Register</a>
   
 
</div>

 <meta name="viewport" content="width=device-width, initial-scale=1">



<div class="w3-content w3-section" style="max-width:1250px">
    
 <img class="mySlides w3-animate-fading" src="Capture2.PNG" style="width:100%" height="450px">
    </div>
  <img class="mySlides w3-animate-fading" src="Capture1.PNG" style="width:100%">
    <div class="w3-content w3-section" style="max-width:1500px">
  <img class="mySlides w3-animate-fading" src="Capture10.PNG" style="width:100%">
    </div>
  <img class="mySlides w3-animate-fading" src="Capture11.PNG" style="width:100%">
   


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000);    
}
</script>
  

  


</body>
</html>
    

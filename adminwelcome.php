<?php
include("config.php");
session_start();
$link=connecttodb();
?>
<html>
    <head>
       <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        
        <style>
    body{  background-image: url('https://images.unsplash.com/photo-1453087460409-fd3ca2ad06be?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=75fc28ec2e90b4ed54757864d13cefc6&auto=format&fit=crop&w=400&q=60');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        opacity: 1;
            ;}
        
        #head1 { font-size: 40px;
        text-align: center;
  color: darkgreen;
font-family: arial, sans-serif;
font-weight: bold;
margin-top: 10px;
            padding: 0;
            overflow: auto;

            opacity: 1;
        margin-bottom: 0px;}
        
            .button {
    background-color: white; /* Green */
    border:  2px groove white;
    border-radius: 12px;
    color: white;
    padding: 8px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    width: 400px;
      opacity: 1;          
}
            h3{color: yellow;
                background-color: gray;
                 margin-right: 80%;
                align-content: justify;
    font-weight: bold;
                opacity: 1;
            }

/* visited link */
a:visited {
    color: black;
}

/* mouse over link */
a:hover {
    color:blue;
}

/* selected link */
a:active {
    color: blue;
}

        </style>
    </head>
    <div>
 <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
   <body>
       <header class="w3-container w3-yellow">
  <h1 id=head1 style="color:darkgreen;" ><i class="fa fa-viacoin fa-fw fa-2x"></i>       ALLEN EDMOND'S FOOTWEAR COMPANY</h1><br>
</header>
    
       
  <form action="POST">
    <h3>     FOOTWEAR</h3>
      

    <button  class=button><a href="http://localhost/storedf.php"> Open footwear database</a></button> 

    <button class=button  value="Enterfoot"><a href="http://localhost/updatef.php">Manipulate footwear data</a></button>
      
       

   <br><br>
    
     <h3>    MANUFACTURER</h3>

        <button class=button value="openm" name="openm"><a href="http://localhost/storedm.php"> Open Manufacturer database</a></button>

    <button class=button value="Entermanu"><a href="http://localhost/updatem.php">Manipulate manufacturer data</a></button>
    <br><br>
    
     <h3>     SHOWROOM</h3>

    <button   class=button value="Opens" name="opens"><a href="http://localhost/storeds.php"> Open Showroom database</a></button>

    <button class=button value="Entershow"><a href="http://localhost/updates.php">Manipulate showroom data</a></button><br><br>
        
        
         <h3>    CUSTOMER</h3>
        
        <button class=button value="openc" name="openc"><a href="http://localhost/storedc.php"> Open customer database</a></button>

    <button  class=button value="Entercust"><a href="http://localhost/updatec.php">Manipulate customer data</a></button>

   <br><br>
        
        <h3>     ORDERS</h3>
        
        <button class=button value="openo" name="openo"><a href="http://localhost/storedo.php"> Open order database</a></button>

    <button  class=button value="Enterord"><a href="http://localhost/updateo.php">Manipulate order data</a></button>

   <br><br>
        
        </form>
   
  
  
     
    </body></html> 

   
    <!--<footer class="w3-block w3-padding-64 w3-opacity w3-hover-opacity-off">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i></a>
  <iframe src="audio.mp3" allow="autoplay" style="display:none" id="iframeAudio">
    </iframe>
    <audio controls autoplay>
    <source src="audio.mp3" type="audio/mpeg">
     </audio>
</footer>-->
 <?php ob_start();
    if(isset($_POST['submit']))
    {
        $adname="";$pass="";
        $adname=$_POST['aname'];
        $pass=$_POST['psw'];
        if($adname=="adminallen" && $pass=="123admin")
        {
           header('Location: adminwelcome.php');
   }
      else echo "Invalid User.";
    }
ob_end_flush();?>  

   
 <!DOCTYPE html>
<html lang="en">
<head>
     
  <!-- Theme Made By www.w3schools.com -->
  <title>Footwear database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: darkgreen;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 20px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #FCF885;
      color: black;
      padding: 100px 30px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 200px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
      
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: darkgreen;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid darkgreen; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid darkgreen;
      background-color: #fff !important;
      color: darkgreen;
  }
  .panel-heading {
      color: #fff !important;
      background-color:darkgreen !important;
      padding: 20px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 20px 0;
      background-color: darkgreen;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: darkgreen;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: darkgreen !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 24px;
      margin-bottom: 28px;
      color: darkgreen;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
       
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 20px 0;
    }
      
    .btn-lg {
        width: 80%;
        margin-bottom: 30px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
      
  }
      .mail {
          align-items: center;
          align-content: center;
          font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
        font-family: Montserrat, sans-serif;  
      }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#myPage" style="color:darkgreen;"><i class="fa fa-viacoin fa-fw fa-2x"></i>ALLEN EDMOND'S FC</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#home"><i class="fa fa-home fa-fw fa-2x"></i>HOME</a></li>
        <li><a href="#about"><i class="fa fa-users fa-fw fa-2x"></i>ABOUT US</a></li>
        <li><a href="#services">
            <i class="fa fa-globe fa-fw fa-2x"></i>SERVICES</a></li>
          <li><a href="#login">
              <i class=" fa fa-spinner fa-spin fa-fw fa-2x"></i>LOGIN</a></li>
          
          <li><a href="#gallery0">
              <i class="fa fa-image fa-fw fa-2x"></i>GALLERY</a></li>
        <li><a href="#mail"><i class="fa fa-envelope fa-2x"></i>MAIL</a></li>
      </ul>
    </div>
  </div>
</nav>

<footer class="w3-block w3-padding-64 w3-opacity w3-hover-opacity-off">
        <a href="#home" class="w3-button w3-light-grey"></a>
  <iframe src="audio.mp3" allow="autoplay" style="display:none" id="iframeAudio">
    </iframe>
    <audio  autoplay>
    <source src="audio.mp3" type="audio/mpeg">
     </audio>
</footer>
<div class="jumbotron text-center">
  <h1  style="color:darkgreen;">ALLEN EDMOND'S FOOTWEAR</h1><br>
    
  <p>India's leading online fashion and apparel store <strong>ALLEN EDMOND'S FOOTWEAR</strong> has come up with great offers for this month.Get the Best of Apparel, Shoes, Jewellery and More at Aleen admond's footwear. Order Now!
Attention:serious shopping ahead!!!!
       <p> <strong><i>BLACK FRIDAY</i></strong>: We have got 50-80% offer on any branded shoes and many more!
Great Savings. Every Day. Shop from our Deal of the Day, Lightning Deals and avail other great offers.</p>
<p>Forget the fashion streets of the world. We, at Allen Admond's footwear, have all that you need to glam up your fashion quotient. 
From an extensive range of mens sport shoes,women heels, funky footwears for men and women and other matching footwear, we purvey diversity of choices in online shopping in India under one umbrella. 
Your Allen Admond's Online Shop has arrived!
    Do not miss <i>the attractive best buy prices and super discount coupons</i>. Get more, pay less!!</p>
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<div class="slideshow-container">


    <div class="w3-content w3-section" style="max-width:1250px">
    
    
 <img class="mySlides w3-animate-fading" src="Capture15.PNG" style="width:100%" height="450px">
        
    </div>
    <div>
    
        <img class="mySlides w3-animate-fading" src="Capture14.PNG" style="width:100%" height="410px"></div>
    
    <div class="w3-content w3-section" style="max-width:2000px">
       
  <img class="mySlides w3-animate-fading" src="Capture7.PNG" style="width:100%" height="450px">
    </div>
<div class="w3-content w3-section" style="max-width:1250px">
    
  <img class="mySlides w3-animate-fading" src="Capture4.PNG" style="width:100%" height="450px">
</div>
    <div class="w3-content w3-section" style="max-width:1250px">
    
  <img class="mySlides w3-animate-fading" src="Capture16.png" style="width:100%" height="450px">
</div>
    <div class="w3-content w3-section" style="max-width:1250px">
    
  <img class="mySlides w3-animate-fading" src="Capture12.PNG" style="width:100%" height="450px">
</div>
  
    </div> 
    </div>
    </body></html>




<html>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Allen Admond's footwear</h2><br>
      <h4>Allen admond's footwear is a young and vibrant company that aims to provide good quality branded products. It caters to the fashion needs of men, women and kids across footwear, apparel, jewellery and accessories.</h4><br>
      <p>At Allen Admond's footwear company we strive to achieve the highest level of “Customer Satisfaction” possible. Our cutting edge E-commerce platform, highly experienced buying team, agile warehouse systems and state of the art customer care centre provides customer with:<br>

1.Broader selection of products.<br>
2.Superior buying experience.<br>
3.On-time delivery of products.<br>
4.Quick resolution of any concerns.<br></p>
        
        
         <!--<br><button class="btn btn-default btn-lg">Get in Touch</button>-->
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo-small"></span>
    </div>
  </div>
</div>
        
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
  padding: 14px 24px;
  text-decoration: none;
  font-size: 30px;
}

.topnav a:hover {
  background-color: #ddd;
  color: white;
}

/*.topnav a.active {
  background-color: #000000;
  color: black;
}*/
    .center {
        text-align: center;
        border: 1px solid
            black;
    
    }
   
    
    
    </style>
     
   <style>
    body {
    background-color: white;
}
    </style>
    
    

<body>
   
    
 <div style="padding-center:16px">
     
</div>
   

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
  

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
        <span class="glyphicon glyphicon-globe logo"></span>
      </div>    
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong>“To continue to offer quality products and services using the best technology available and at a reasonable price. This results in highly loyal customers, while maintaining shareholders interest and company profits in mind. We also want to expand geographically, increasing the number of customers and to keep improving our main competitive advantage - infrastructure. By working hard and having fun we seek to offer the best working environment to our employees, promoting career opportunities, and to increase our responsibility towards environment and the society.” </h4><br>
      <p style="color:#5c5c3d;"><strong>VISION:</strong>Our company’s mission is to bring inspiration and innovation to every athlete in the world. If you have a body, you are an athlete.
          <br>
          Nike processes information about your visit using cookies to improve site performance, facilitate social media sharing and offer advertising tailored to your interests.</p>
      </div></div></div></body>
<!-- Container (Services Section) -->
<html>
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  
  <p style="color:#5c5c3d;" ><font size="4">Allen Admond's value proposition revolves around giving consumers the power and ease of purchasing fashion and lifestyle products online. Offerings such as the largest in-season product catalogue, 100% authentic products, cash on delivery and 30 day return policy make our company, the preferred shopping destination in the country. To make online shopping easier for you, a dedicated customer connect team is on standby to answer your queries 24x7.
      </font> 
</p>
     <div class="row">
    <div class="col-sm-4">
      <span style="color:#d41121;" class="glyphicon glyphicon-earphone"></span>
      <h4 style="color:#d41121;">HELP DESK</h4>
      <p style="color:black;">We Are Always Available for Customer Queries And Help.</p>
    </div>
    <div class="col-sm-4">
      <span style="color:#d41121;" class="glyphicon glyphicon-heart"></span>
      <h4 style="color:#d41121;">LOVE</h4>
      <p style="color:black;">Customer Satisfaction is our primary concern </p>
    </div>
    <div class="col-sm-4">
      <span style="color:#d41121;" class="glyphicon glyphicon-gift"></span>
      <h4 style="color:#d41121;">FREE SHIPPING & GIFTCARDS</h4>
      <p style="color:black;">Get Free Home Delivery Of Footwear</p>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-4">
      <span style="color:#d41121;" class="glyphicon glyphicon-lock"></span>
      <h4 style="color:#d41121;">PRIVACY POLICY</h4>
      <p style="color:black;">Your Personal Information is Safe With Us.</p>
    </div>
    <div class="col-sm-4">
      <span style="color:#d41121;" class="glyphicon glyphicon-certificate"></span>
      <h4 style="color:#d41121;">CERTIFIED</h4>
      <p style="color:black;">Trusted Products from renowned brands worldwide. </p>
    </div>
    <div class="col-sm-4">
      <span style="color:#d41121;"  class="glyphicon glyphicon-cloud"></span>
      <h4 style="color:#d41121;">STORE INFORMATION</h4>
      <p style="color:black;">All Information is Stored Securely in the Company Database.</p>
    </div>
  </div>
</div>

    
</html>
    
     

    <!DOCTYPE html>
    <html>
   <div id="login" class="container-fluid text-center">
  <h2>LOGIN</h2> 
    
    
<!-- php for login -->

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    /*border: 1px solid #ccc;*/
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 40%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 60%;
    border-radius: 60%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 140%; /* Full width */
    height: 140%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    /*background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    /*margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    /*border: 1px solid white;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 100px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 60%;
    }
}
    a:visited {
    color: white;
}

/* mouse over link */
a:hover {
    color:darkgreen;
}

/* selected link */
a:active {
    color: white;
}
    </style>
     <!--<style>
    body {
    background-color: #DCDCDC;
}
    </style>-->
    
</head>
<body>

<h2></h2>


  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
      <img src="icons8-customer-50.png">
    </div>

    <div class="container">
      <label for="aname"><b>ADMIN ID:</b></label>
      <input type="text" placeholder="Enter Your Unique Id:" name="aname" required><br><br>

      <label for="psw"><b>PASSWORD</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>
        
      <button type="submit" name="submit">Login</button><br><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><a href="http://localhost/heyal.php">CANCEL</a></button>
      
    </div>
  </form>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>

</div>
</html>
    
    
    
    <!-- Container (Gallery Section) -->
 <html>
      <div id="gallery0" class="container-fluid ">
  
    <head>

    <style>
        
div.gallery0 {
    margin: 60px;
    border: 8px solid #ccc;
    float: left;
    width: 200px;
}

div.gallery0:hover {
    border: 8px solid #777;
}

div.gallery0 img {
    width: 100%;
    height: auto;
}

div.desc { color: red;
    padding: 30px;
    text-align: center;
            }
        
</style>
    
    </head>
    
    <body>
<h2 align="center">ALLEN EDMOND'S FOOTWEAR PRODUCTS:</h2>
        <div class="row">
<div class="gallery0">
  <a target="_blank" href="http://localhost/Capture28.png">
    <img src="Capture28.png" alt="Capture28" width="2000" height="700">
  </a>
  <div class="desc">footwear product f1</div>
</div>

<div class="gallery0">
  <a target="_blank" href="http://localhost/Capture59.png">
    <img src="Capture59.png" alt="Capture59" width="2000" height="700">
  </a>
  <div class="desc">footwear product f2</div>
</div>

<div class="gallery0">
  <a target="_blank" href="http://localhost/Capture55.png">
    <img src="Capture55.png" alt="Capture55" width="2000" height="700">
  </a>
  <div class="desc">footwear product f3</div>
</div>

        <div class="gallery0">
  <a target="_blank" href="http://localhost/Capture47.png">
    <img src="Capture47.png" alt="Capture47" width="2000" height="700">
  </a>
  <div class="desc">footwear product f4</div>
</div>

        </div>
        
      <div class="row">
<div class="gallery0">
  <a target="_blank" href="http://localhost/Capture26.png">
    <img src="Capture26.png" alt="Capture26" width="2000" height="700">
  </a>
  <div class="desc">footwear product f5</div>
</div>

<div class="gallery0">
  <a target="_blank" href="http://localhost/Capture31.png">
    <img src="Capture31.png" alt="Capture31" width="2000" height="700">
  </a>
  <div class="desc">footwear product f6</div>
</div>

<div class="gallery0">
  <a target="_blank" href="http://localhost/Capture48.png">
    <img src="Capture48.png" alt="Capture48" width="2000" height="700">
  </a>
  <div class="desc">footwear product f7</div>
</div>

        <div class="gallery0">
  <a target="_blank" href="http://localhost/Capture49.png">
    <img src="Capture49.png" alt="Capture49" width="2000" height="700">
  </a>
  <div class="desc">footwear product f8</div>
</div>

        </div>
          
        <div class="row">
<div class="gallery0">
  <a target="_blank" href="http://localhost/Capture50.png">
    <img src="Capture50.png" alt="Capture50" width="2000" height="700">
  </a>
  <div class="desc">footwear product f9</div>
</div>

<div class="gallery0">
  <a target="_blank" href="http://localhost/Capture51.png">
    <img src="Capture51.png" alt="Capture51" width="2000" height="700">
  </a>
  <div class="desc">footwear product f10</div>
</div>

<div class="gallery0">
  <a target="_blank" href="http://localhost/Capture53.png">
    <img src="Capture53.png" alt="Capture53" width="2000" height="700">
  </a>
  <div class="desc">footwear product f11</div>
</div>

        <div class="gallery0">
  <a target="_blank" href="http://localhost/Capture54.png">
    <img src="Capture54.png" alt="Capture54" width="2000" height="700">
  </a>
  <div class="desc">footwear product f12</div>
</div>

        </div>
        
        
</body>



    
    
    <!DOCTYPE html>
<html>
  <div id="mail" class="container-fluid text-center">
   
   <style>
        
body {
    float: left;
  
    

 
    width: 100%;
    height: auto;


 
    padding: 30px;
    text-align: center;
            }
        
</style>
     
<body><p> <br><br> </p>
   <div> <img src="https://media1.giphy.com/media/6jxC2K5zFlMXK/giphy.webp?cid=3640f6095c004d8b3864486a6b2d53c7" align="left" width:30%  height:100%; > <img src="https://media3.giphy.com/media/slrATiQg5O1dm/giphy.webp?cid=3640f6095c005076484c497263934292" align="right" height:90%>
    <h2 >MAIL</h2>

<p><br>
This is an email link:
   
<a href="mailto:poorvikaithal99@gmail.com?Subject=Hello! thank you for registering!" target="_top">
Send Mail</a>
    
    </p>

</div>
</body>
    </div>
       </html>
   



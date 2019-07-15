<html>
   <div id="gallery" class="container-fluid text-center">
  <h2>GALLERY</h2>   
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
}

/* The grid: Four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
}

/* Style the images inside the grid */
.column img {
    opacity: 0.8; 
    cursor: pointer; 
}

.column img:hover {
    opacity: 1;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The expanding image container */
.container {
    position: relative;
    display: none;
}

/* Expanding image text */
#imgtext {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
}
    div.desc { color: red;
    padding: 30px;
    text-align: center;
            }
    div.gallery {
    margin: 80px;
    border: 5px solid #ccc;
    float: left;
    width: 150px;
}

div.gallery:hover {
    border: 5px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

</style>
</head>
<body>

<div style="text-align:center">
  <h2>ALLEN EDMOND'S FOOTWEAR PRODUCTS:</h2>
  <p></p>
</div>

<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="Capture52.png" alt="Nature" style="width:100%" onclick="myFunction(this);">
      <div class="desc">footwear product f3</div>
  </div>
  <div class="column">
    <img src="Capture53.png" alt="Snow" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="Capture54.png" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="Capture55.png" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    </div>
    <div class="row">
   <div class="column">
    <img src="Capture56.png" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="Capture57.png" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="Capture58.png" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="Capture59.png" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    </div>
    <div class="row">
    <div class="column">
    <img src="Capture47.png" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="Capture48.png" alt="Lights" style="width:100%" onclick="myFunction(this);">
    </div>
    
    <div class="column">
    <img src="Capture50.png" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="Capture49.png" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    </div>
    
        
        
        <div class="row">
    <div class="column">
    <img src="Capture23.png" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    
    
    <div class="column">
    <img src="Capture24.png" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="Capture25.png" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
    <div class="column">
    <img src="Capture26.png" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
            </div> 
        
    
<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <!--<img id="expandedImg" style="width:20%">
  <div id="imgtext"></div>-->
</div>

<script>
function myFunction(imgs) {
    /*var expandImg = document.getElementById("expandedImg");*/
    var imgText = document.getElementById("imgtext");
    /*expandImg.src = imgs.src;*/
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
    </script>
       </body>
    </div>
</html>
    
    
    
<?php  
  session_start();
  
  if(isset($_SESSION['uname'])){
    include("models/header.php");
    include("models/nav.php");
    include("GetMe.php");
  } 
	else{
    header('Location: index.php');
  }
?>

<!--Long term borrowed from https://www.w3schools.com/howto/howto_js_slideshow_gallery.asp-->
<body>

  <div id="mySlides">
    <div class="numbertext" id="numbers"></div>
    <img src="images/testing.jpg" id="image" />
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
  <div class="caption-container">
    <p id="caption"></p>
  </div>
  
  <!--Populated by AJAX-->
  <div class="row" id="images">
  </div>
<div class="right">
  <a href="reset.php" class="waves-effect waves-light btn">Reset</a>
</div>
  <script src="materialize/js/slideShow.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
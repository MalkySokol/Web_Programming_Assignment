<?php include "header.php"; ?>

Maintaining good nutrition is the key to being healthy and happy!
<br><br>
<a href = "login.php">CLICK HERE TO LOGIN</a>

  
  <script src= "jquery-3.5.1.js"></script>
  <script src="jquery.slides.min.js"></script>

  <script>
    $(function(){
      $("#slides").slidesjs({
        width: 840,
        height: 328,
		   play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });
  </script>
<div class="container">
  <div id="slides">
    <img src="img/fruits-and-vegetables-of-brazil.jpg">
    <img src="img/chicken.jpg">
    <img src="img/unsplash.jpg">
    <img src="img/bread.jpg">
  </div>
 </div>

<?php include "footer.php"; ?>
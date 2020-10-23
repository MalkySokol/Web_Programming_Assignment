<html>
<head>
<title> Eat Healthy </title>

<link rel = "stylesheet" href = "styles.css" type = "text/css"/>

</head>

<body>
<img src = "favicon.ico" class ="logo" alt = "logo"/>
<br>
<div class="logotext"> eat healthy </div>
<br><br>
<header>
<!-- <img src="fruits-and-vegetables-of-brazil.jpg" class="banner"> -->

<!--
<div class = "header">eat healthy</div><br>
-->


<?php
//include "menu.php"/?>
  
		<a href="index.php" class="active">Home</a>
		<a href="form2.php" class = "t" style = "position:absolute;">Nutriton Form</a>
		<a href="login.php">Login</a> 
		<a href="myInfo.php">My Info</a> 
		
<!--<button>Start Animation</button>
<div style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>-->
<br>

<script src= "jquery-3.5.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("a").each(function() {
		if ((window.location.pathname.indexOf($(this).attr('href'))) > -1) {
			$(this).addClass('activeMenuItem');
		}
	});
});
  /*$("a.t").click(function(){
    $("a.t").animate({left: '250px'});
  });
});*/
	/*$(window).mousedown(function(){
	  var scroll = $(window).mousedown();
	  if (scroll > 0){
	    $("header").addClass('active');
	  } else{
	    $("header").removeClass('active');
	  }
	})*/
</script>
</header>
  
<hr/>


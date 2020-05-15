<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		

</head>
<body>
	<!-- Header page-->
	<?php include "head.php";?>
<ul id="menu">
  <ul>
    <center>
		<li><a href="#">Categories</a></li>
		<li><a href="#">Best Sellers</a></li>
		<li><a href="#">Featured Books</a></li>
		<li><a href="#">Newly Added</a></li>
		<li><a href="#">Sell</a></li>
		<li><a href="#">Contact</a></li>
	</center>
	</ul>
</ul>

<!-- Slideshow container -->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image\12.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image\13.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image\14.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<!-- end of slideshow -->
<!-- script of slideshow-->
<script>
					var slideIndex = 0;
					showSlides();

					function showSlides() {
					  var i;
					  var slides = document.getElementsByClassName("mySlides");
					  var dots = document.getElementsByClassName("dot");
					  for (i = 0; i < slides.length; i++) {
					    slides[i].style.display = "none";  
					  }
					  slideIndex++;
					  if (slideIndex > slides.length) {slideIndex = 1}    
					  for (i = 0; i < dots.length; i++) {
					    dots[i].className = dots[i].className.replace(" active", "");
					  }
					  slides[slideIndex-1].style.display = "block";  
					  dots[slideIndex-1].className += " active";
					  setTimeout(showSlides, 5000); // Change image every 2 seconds
					}
		</script>
<!-- End of script -->
<!-- BOOKS DETAIL-->
	<div class="start">
		<font style="font-size: 20px;margin-left: 40px">DEAL OF THE DAY</font>
<div class="main">
 <!--cards -->
			<div class="card">

			<div class="image">
			   <img src="image/4.jpg">
			</div>
			<div class="title">
			 <h1>
			Write title Here</h1>
			</div>
	<div class="des">
	 <p>
	You can Add Desccription Here...</p>
	<button>Read More...</button>
	</div>
	</div>
<!--cards -->


	<div class="card">

	<div class="image">
	   <img src="image/5.jpg">
	</div>
	<div class="title">
	 <h1>
	Write title Here</h1>
	</div>
	<div class="des">
	 <p>
	You can Add Desccription Here...</p>
	<button>Read More...</button>
	</div>
	</div>
<!--cards -->


	<div class="card">

	<div class="image">
	   <img src="image/6.jpg">
	</div>
	<div class="title">
	 <h1>
	Write title Here</h1>
	</div>
	<div class="des">
	 <p>
	You can Add Desccription Here...</p>
	<button>Read More...</button>
	</div>
</div>
<!--cards -->


			<div class="card">

			<div class="image">
			   <img src="image/7.jpg">
			</div>
			<div class="title">
			 <h1>
			Write title Here</h1>
			</div>
			<div class="des">
			 <p>
			You can Add Desccription Here...</p>
			<button>Read More...</button>
			</div>
</div>
</div></div>
<!--cards -->

<div class="start">
		<font style="font-size: 20px;margin-left: 40px">INDIA'S TOP READS</font>
<div class="main">
 <!--cards -->
			<div class="card">

			<div class="image">
			   <img src="image/8.jpg">
			</div>
			<div class="title">
			 <h1>
			Write title Here</h1>
			</div>
	<div class="des">
	 <p>
	You can Add Desccription Here...</p>
	<button>Read More...</button>
	</div>
	</div>
<!--cards -->


	<div class="card">

	<div class="image">
	   <img src="image/9.jpg">
	</div>
	<div class="title">
	 <h1>
	Write title Here</h1>
	</div>
	<div class="des">
	 <p>
	You can Add Desccription Here...</p>
	<button>Read More...</button>
	</div>
	</div>
<!--cards -->


	<div class="card">

	<div class="image">
	   <img src="image/10.jpg">
	</div>
	<div class="title">
	 <h1>
	Write title Here</h1>
	</div>
	<div class="des">
	 <p>
	You can Add Desccription Here...</p>
	<button>Read More...</button>
	</div>
</div>
<!--cards -->


			<div class="card">

			<div class="image">
			   <img src="image/2.jpg">
			</div>
			<div class="title">
			 <h1>
			Write title Here</h1>
			</div>
			<div class="des">
			 <p>
			You can Add Desccription Here...</p>
			<button>Read More...</button>
			</div>
</div>
</div></div>

<!-- cards-->
<div class="start">
		<font style="font-size: 20px;margin-left: 40px">WHAT'S TRENDING</font>
<div class="main">
 <!--cards -->
			<div class="card">

			<div class="image">
			   <img src="image/1.jpg" height="300px" width="50px">
			</div>
			<div class="title">
			 <h1>
			Write title Here</h1>
			</div>
	<div class="des">
	 <p>
	You can Add Desccription Here...</p>
	<button>Read More...</button>
	</div>
	</div>
<!--cards -->


	<div class="card">

	<div class="image">
	   <img src="image/11.jpg">
	</div>
	<div class="title">
	 <h1>
	Write title Here</h1>
	</div>
	<div class="des">
	 <p>
	You can Add Desccription Here...</p>
	<button>Read More...</button>
	</div>
	</div>
<!--cards -->


	<div class="card">

	<div class="image">
	   <img src="image/3.jpg">
	</div>
	<div class="title">
	 <h1>
	Write title Here</h1>
	</div>
	<div class="des">
	 <p>
	You can Add Desccription Here...</p>
	<button>Read More...</button>
	</div>
</div>
<!--cards -->


			<div class="card">

			<div class="image">
			   <img src="image/6.jpg">
			</div>
			<div class="title">
			 <h1>
			Write title Here</h1>
			</div>
			<div class="des">
			 <p>
			You can Add Desccription Here...</p>
			<button>Read More...</button>
			</div>
</div>
</div></div>
<footer style="background-color: #111109 ;color: white">
	<table width="874" height="318" border="0">
  <tr>
    <th width="390" height="37" scope="col">ABOUT US</th>
    <th width="17" scope="col">&nbsp;</th>
    <th width="297" scope="col">INFORMATION</th>
    
    <th width="152" scope="col">Contact Us</th>
  </tr>
  <tr>
    <th height="146" scope="row">Ever wanted to buy a book but could not because it was too expensive? worry not! because <strong>Bookistan</strong> is here! <strong>Bookistan</strong>, these days in news,is being called as the Robinhood of the world of books. <strong>Bookistan</strong> team is committed to bring to you all kinds of best books at the minimal prices ever seen anywhere. Yes, we are literally giving you away a steal.</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</footer>
</body>
</html>
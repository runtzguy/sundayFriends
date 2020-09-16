<!Doctype html>
<html lang="en">
  <head>
  	<title>Sunday Friends</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
<style>
/*------- Presets ---------*/
html, body {
	font-family: 'Arial', Serif;
	font-size: 15px;
}
/*------- Header ---------*/
.intro {
	background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.8)), url("index_images/greenHand.jpg") no-repeat center center fixed;
	display: table;
	height: 100vh;
	background-size: cover;	
}	
.intro-text {
	position: absolute;
	margin: 0;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.intro-text h1 {
	color: #f5f3f1;
}
.intro-text h4, .intro-text h5{
	color: #16a085;
	text-align: center;
}
/******* Side bar ***********/
.navbar{
	opacity: 0.5;
}
.sidebar-nav {
	padding: 0;
}
#sidebar-wrapper {
	position: fixed;
	padding: 0;
	margin: 0;
	height: 100%;
	top: 0px;
	right: 0px;
	width: 0px;
	height: 100%;
	background-color: #ccc;
	opacity: 0.8;
	display: flex;
	flex-direction: column;
	z-index: 1;
	transition: 0.8s;
	text-align: center;
	color: #16a085;
}
.menu-toggle {
	position: fixed;
	padding: 8px;
	margin: 10px 30px 0 0;
	top: 0;
	right: 0;
	z-index: 5;
	background-color: #f2f4f7;
	border: 2px solid #16a085;
	border-radius: 5px;
}
.menu-toggle i {
	color: #16a085;
}
#sidebar-wrapper .menu-row {
	margin-left: 10px;
	padding-top: 30px;
	padding-right: 80px;
	padding-bottom: 20px;
	border-bottom: 2px solid #0e6453;
}
#sidebar-wrapper ul li{
	margin-top: 50px;
	list-style-type: none;
	font-size: 18px;
}
#sidebar-wrapper ul li a{
	padding-bottom: 15px;
	text-decoration: none;
	color: #16a085;
}
#sidebar-wrapper ul li a:hover{
	color: white;
	cursor: pointer;	
}
/*------- Section ---------*/
.section{
	padding: 50px 0;
	color: #16a085;
	background: #f2f4f7;
}
.section-odd {
	padding: 50px 0;
	background-color: #16a085;
	color: white;
}
/*----- People --------*/
.section-people .card .card-body {
	color: #16a085;
}
.card {
	margin-bottom: 15px;
}
/*------- Products --------*/
 .img-thumbnail {
 	width: 350px;
 	height: 250px;
}
/*------- Map --------*/
iframe {
	width: 100%;
	height: 500px;
}
/*-------- Footer ------- */
.section-footer {
	padding-top: 50px;
	background-color: #0e6453;
	color: white;
}
.fa-facebook-f:hover{
	color: #8397c0;
	cursor: pointer;
}
.fa-twitter:hover {
	color: #1da1f2;
	cursor: pointer;
}
.fa-instagram:hover {
	color: #262626;
	cursor: pointer;
}

</style>
</head>
<body>
<header id="section-home">
<a class="menu-toggle" data-on-off="off" href="#">
	<i class="fas fa-bars fa-3x"></i>
</a>
<div id="sidebar-wrapper">
	<div class="menu-row">
		<h5>Menu</h5>
	</div>
	<ul class="sidebar-nav">
		<li id="sidebar-home"><a href="#section-home">Home</a></li>
		<li id="sidebar-history"><a href="#section-history">History</a></li>
		<li id="sidebar-people"><a href="#section-people">People</a></li>
		<li id="sidebar-products"><a href="#section-products">Products</a></li>
		<li id="sidebar-contact"><a href="#section-contact">Contact Us</a></li>
</div>
<div class="container-fluid intro">
	<div class="row">
		<div class="d-flex flex-column justify-content-center intro-text">
			<h1 class="text-center">Sunday&nbspFriends</h1>
			<h4></h4>
			<h5></h5>
		</div>
	</div>
</div>
</header>
<div class="container-fluid section" id="section-history">
	<div class="row d-flex justify-content-center">
		<h2 class="text-center">History</h2>
	</div></br>
	<div class="row">
		<div class="col-lg-6 d-flex justify-content-center">
			<h4 class="align-items-center">What is Sunday Friends?</h4>
		</div>
		<div class="col-lg-5 d-flex justify-content-center">
			<p>Helping children, parents and families to reframe their views of themselves and of their relationships with their communities requires more than a class. It requires new experiences over an extended period of time. It requires opportunities within a supportive community to practice, to develop new skills and attitudes, to discover inner strengths and self-worth and to know the satisfaction that comes from contributing to their community. At Sunday Friends, families find the supportive community and the means to break their cycle of helplessness and poverty. An integrated economic environment is filled with opportunities - not just to receive but also to give. Families work together to earn basic necessities. There are no handouts at Sunday Friends. While children build the developmental assets required for success, adults learn life skills and whole families transition together towards self-sufficiency.</p>
		</div>
	</div>
	</br>
	<div class="row">
		<div class="col-lg-6 d-flex justify-content-center">
			<h4>How did we begin?</h4>
		</div>
		<div class="col-lg-5 d-flex justify-content-center">
			<p>Sunday Friends was founded by Janis Baron, a mother of three and Silicon Valley engineer, in January of 1997. Concerned about the lack of awareness among high school students of different cultures, races and lifestyles, including her own young teens, Janis decided one Sunday to take her children to a family shelter. Despite twenty years of community volunteering, Janis was uncertain about how to help, so she began by having her children interact with the children in the shelter: playing games, drawing and reading. The children in the shelter were reluctant at first to participate, but Janis and her children continued to return each Sunday, slowly building relationships and trust.</p>
		</div>
	</div>
	</br>
	<div class="row">
		<div class="col-lg-6 d-flex justify-content-center">
			<h4>Mission Statement</h4>
		</div>
		<div class="col-lg-5 d-flex justify-content-center">
			<p>Sunday Friends empowers families to break the generational cycle of poverty by fostering positive development in children while educating and guiding parents to support their children's life success.</p>
		</div>
	</div>
</div>
<div class="container-fluid section section-odd section-people" id="section-people">
	<div class="row d-flex justify-content-center">
		<h2 class="text-center">People</h2>
	</div></br>
	<div class="row justify-content-around">
		<div class="card card-andy" style="width: 25rem;">
		  <img class="card-img-top img-thumbnail" src="index_images/andy2.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Andy Senh</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		  <ul class="list-group list-group-flush">
		    <li class="list-group-item">Cras justo odio</li>
		    <li class="list-group-item">Dapibus ac facilisis in</li>
		  </ul>
		  <div class="card-body">
		    <a href="#" class="card-link">Card link</a>
		    <a href="#" class="card-link">Another link</a>
		  </div>
		</div>
		<div class="card card-vic" style="width: 25rem;">
		  <img class="card-img-top img-thumbnail" src="index_images/victor2.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Victor Liu</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		  <ul class="list-group list-group-flush">
		    <li class="list-group-item">Front and Backend Developer</li>
		    <li class="list-group-item">SJSU MIS Dean Scholar</li>
		  </ul>
		  <div class="card-body">
		    <a href="https://linkedin.com/in/victor-liu" class="card-link">LinkedIn</a>
		    <a href="#" class="card-link">Another link</a>
		  </div>
		</div>
		<div class="card card-alex" style="width: 25rem;">
		  <img class="card-img-top img-thumbnail" src="index_images/alex2.jpeg" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Alex</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		  <ul class="list-group list-group-flush">
		    <li class="list-group-item">Cras justo odio</li>
		    <li class="list-group-item">Dapibus ac facilisis in</li>
		  </ul>
		  <div class="card-body">
		    <a href="#" class="card-link">Card link</a>
		    <a href="#" class="card-link">Another link</a>
		  </div>
		</div>
	</div></br></br>
</div>
<div class="container-fluid section" id="section-products">
	<!---
	<div class="row justify-content-around section-products">
		<img src="images/backpack.jpg" class="border img-thumbnail">
		<img src="images/mop.jpg" class="border img-thumbnail">
		<img src="images/paper_towel.jpg" class="border img-thumbnail">
		<img src="images/pillow.jpg" class="border img-thumbnail">
		<img src="images/sunglasses.jpg" class="border img-thumbnail">
	</div></br></br>

	<div class="row justify-content-center">
		<button type="button" class="col-lg-6 btn btn-outline-success" href="#">Go Shopping!</button>
	</div>
	-->
	<?php include 'products.php';?>
</div>
<div class="container-fluid section section-odd" id="section-contact">
	<div class="row d-flex justify-content-center">
		<h2 class="text-center">Contact Us</h2>
	</div></br>
	<iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:#" allowfullscreen>
</iframe>
</div>
<footer>
<div class="container-fluid section-footer">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-6 d-flex justify-content-around">
			<span><a><i class="fab fa-facebook-f fa-1.5x"></i></a></span>
			<a><i class="fab fa-twitter fa-1.5x"></i></a>
			<a><i class="fab fa-instagram fa-1.5x"></i></a>
		</div>
	</div>
	<div class="row d-flex justify-content-center">
		<p>&#169;Copyright Victor Liu</p>
	</div>
</div>
</footer>
<!-- key : AIzaSyAxxr79gz8hoB817RgYOeADd9g1pvwrLF4 -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="gmaps.js"></script>
<script>
$( document ).ready(function() {
var monthList = new Array();
monthList[0] = "January";
monthList[1] = "February";
monthList[2] = "March";
monthList[3] = "April";
monthList[4] = "May";
monthList[5] = "June";
monthList[6] = "July";
monthList[7] = "August";
monthList[8] = "September";
monthList[9] = "October";
monthList[10] = "November";
monthList[11] = "December";
var currentTime = new Date();
currentYear = currentTime.getFullYear();
var month = (currentTime.getMonth() + 1);
var day = currentTime.getDate();


$('.intro-text h4').text(monthList[month] + " " + day +", "+ currentYear);
if(currentTime.getHours() >= 12){
$('.intro-text h5').text((currentTime.getHours()-12) + ":" +currentTime.getMinutes()+ " pm");
} else {
$('.intro-text h5').text((currentTime.getHours()-12) + ":" +currentTime.getMinutes()+ " am");
}
$('.menu-toggle').on('click', function(){
	/*
	$('.sidebar-nav').css('width', '250');

	$('.menu-toggle').css('display', 'none');
	*/
	//var navBar = $('sidebar-nav');
	//var navPos = navBar.offset();

	//console.log(navPos);
	if($(this).attr('data-on-off') == 'off'){
		$(this).attr('data-on-off', 'on');
		$(this).find('i').removeClass('fas fa-bars fa-3x').addClass('fas fa-times fa-2x');
		$('#sidebar-wrapper').css('width', '250');
	}
	else {
		$(this).attr('data-on-off', 'off');
		$(this).find('i').removeClass('fas fa-times fa-2x').addClass('fas fa-bars fa-3x');
		$('#sidebar-wrapper').css('width', '0');
	}
	return false;
});
});
</script>
</body>
</html>

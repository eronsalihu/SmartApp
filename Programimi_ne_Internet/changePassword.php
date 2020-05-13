<?php
require('dbconfig.php');
 ?>

 <script>
 $('#change_Pass').submit(function(e) {
     var $this = $(this);                    // It's a good to cache stuff

     $.ajax({
         data: $this.serialize(),
         type: $this.attr('method'),         // You want `method` here
         url: 'changePassword.php', // Dunno why you used `attr`
         success: function() {
            alert("Password Changed Succesfully");
         },
         error: function(e, x, r) {
            alert("Didn't change the password");
         }
     });

     e.preventDefault();
 });
 </script>
 <?php
 if(isset($_POST['change'])){}
$username=$_SESSION['username'];
$password = $_POST['old'];
$newpassword = $_POST['new'];
$confirmnewpassword = $_POST['verify'];
$password=md5($password);
$sql = "SELECT * FROM signup WHERE `username` = ? AND 'password'=?  LIMIT 1";
       $query = $db->prepare($sql);
       $query->bindParam(1, $username, PDO::PARAM_STR);
       $query->bindParam(2, $password, PDO::PARAM_STR);
       if($query->execute() && $query->rowCount()){
            if($newpassword == $confirmnewpassword) {
                    $sql = "UPDATE `signup` SET `password` = ? WHERE `username` = ?";

                    $query = $dbh->prepare($sql);
                    $query->bindParam(1, $newpassword, PDO::PARAM_STR);
                    $query->bindParam(2, $username, PDO::PARAM_STR);
                    if($query->execute()){
                        echo '<script>alert("Password Changed Successfully!"></script>';
                    }else{
                        echo '<script>alert("Password could not be updated!"></script>';
                    }

}}
 ?>
 <!DOCTYPE html>
 <html >
 <head>
 	<title>Smart App</title>
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="css/reset.css">
     <link rel="stylesheet" type="text/css" href="css/projekti.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 	<div id="map"></div>
     <script>
     var map, infoWindow;
       function initMap() {
         map = new google.maps.Map(document.getElementById('map'), {
           center: {lat: -34.397, lng: 150.644},
           zoom: 6
         });
         infoWindow = new google.maps.InfoWindow;
         if (navigator.geolocation) {
           navigator.geolocation.getCurrentPosition(function(position) {
             var pos = {
               lat: position.coords.latitude,
               lng: position.coords.longitude
             };

             infoWindow.setPosition(pos);
             infoWindow.setContent('Location found.');
             infoWindow.open(map);
             map.setCenter(pos);
           }, function() {
             handleLocationError(true, infoWindow, map.getCenter());
           });
         } else {

           handleLocationError(false, infoWindow, map.getCenter());
         }
       }

       function handleLocationError(browserHasGeolocation, infoWindow, pos) {
         infoWindow.setPosition(pos);
         infoWindow.setContent(browserHasGeolocation ?
                               'Error: The Geolocation service failed.' :
                               'Error: Your browser doesn\'t support geolocation.');
         infoWindow.open(map);
       }
     </script>
     <script async defer
     src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
     </script>

 <script src="jquery-1.11.2.min.js"></script>
 <script>
 $(document).ready(function(){
   $(".smart").click(function(){
     $(".Free_Psd").slideToggle("slow");
 	$(".smart");

   });
 });
 $(document).ready(function(){
   $(".qqq").click(function(){
     $("#benefi").slideToggle("slow");
 	$(".qqq");

   });
 });

 $(document).ready(function(){

   $(".emaili").focus(function(){
     $(this).css("background-color", "#B86366");

   });
   $(".emaili").blur(function(){
     $(this).css("background-color","#1F2531");
   });
 });


 </script>

 </head>

 <style>
 #newspaper {
   /* Old Chrome, Safari, Opera */
   -webkit-column-count: 2;
   -webkit-column-width: 30px;

   /* Old Firefox */
   -moz-column-count: 2;
   -moz-column-width: 30px;

   /* Statndard syntax */
   column-count: 2;
   column-width: 30px;
 }
 #subb{
   display: block;
     background: #B86366;
     padding: 14px 52px;
     border-radius: 12px;
     color: white;
     font-weight: 700;
     font-size: 21px;
     cursor: pointer;
 font-family: Times-New-Roman"
 }

 *{
 	margin: 0;
 	padding: 0;
 }
 .border{
 	border-bottom: solid 1px #5C606C;
 	margin-left: 1em;
 	margin-right: 1em;
 	margin-bottom: 2em;
   padding-bottom: 1.2em;

 }
 .error {color: #FF0000;}
 nav ul li{
 	list-style: none;
 	display: inline;
   padding: 0.7em;
 }
 nav#mainMenu{
 	background-color: #1F2531;
 	text-align: right;
 	padding: 2.3em;
 	font-family: Times-New-Roman;
 	font-size: 1em;
 	margin-right: 1em;
 }
 nav{
 	color:#616767;
 }
 nav a{
 	padding: 1em;
 	text-transform: uppercase;
 }
 a{
 	color:#656A6D;
 	text-decoration: none;
 	display: inline;
 }

 a.active{
 	color: #FCFFFF;
 }
 a:hover{
 	color: #FCFFFF;
 	border-top:solid 4px #B86366;

 }
 #ani:hover{
     padding-top: 2.8em;
 }

 .smarti_free{
 	background-color: #B86366;
 	padding: 3.3em 2.1em;
 	margin-left: 1em ;
 	border-radius: 0 0 1em 1em;
 	float: left;
 	border-width: 100%;

 }
 .smart{
   font-size: 2.2em;
   padding-bottom:0.6em;
     color: #EACDCC;
 }
 .Free_Psd{
   font-size: 0.8em;
   padding-left: 1.5em;
   color: #EACDCC;
 }

 /*dropdown_menu*/

 li a.dropdbtn.dropdown{
 	display: inline-block;
 	text-align: center;
 	padding: 14px 16px;
 	text-decoration: none;
 	margin: 0;
  }
  li a:hover,.dropdown:hover{
  background-color: #1F2531;
  }
  li.dropdown{
  	display: inline-block;

  }

 .dropdown-content{
 	margin-top: 1em;
 	display: none;
 	position: absolute;
 	background:#B86366;
 	width: 130px;
 	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0,2);

 }
 .dropdown-content a{
 	color: black;
 	padding: 12px 16px;
 	text-decoration: none;
 	display: block;
 	text-align: left;
 	float: none;
 }
 .dropdown-content a:hover{
 background-color: :#1F2531;
 border-radius: 5px;
 }
 .dropdown:hover .dropdown-content{
 	display: block;
 	border-radius: 5px;
 }
 </style>
 <script type="text/javascript">
 	var w;

 function startWorker() {
   if(typeof(Worker) !== "undefined") {
     if(typeof(w) == "undefined") {
       w = new Worker("demo_workers.js");
     }
     w.onmessage = function(event) {
       document.getElementById("result").innerHTML = event.data;
     };
   } else {
     document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Workers...";
   }
 }

 </script>

 <body onload="startWorker()">

 	<div>
 <section class="smarti_free">

 		<p class="smart" >
 			SMART APP <br>
 		</p>
 		<p class="Free_Psd" >
 			 All About Smart Apps Here
 		</p>
 		</section>
 	<header>

       <nav id="mainMenu">
          <ul>
            <li><a  id="ani" href="indexi.php" >Home</a></li>|
            <li><a id="ani" href="style_demo.php" >Style Demo</a></li>|
            <li><a id="ani" href="contact.php">Contact</a></li>|
            <li  class="dropdown"><a id="ani"class="dropdbtn" >Dropdown</a>
            	<div class="dropdown-content">
            		<a id="dropdowmia" href="login.php" > LogIn/SignUp</a>
            		<a id="dropdowmai" href="subscribe.php" >SUBSCRIBE</a>
            		<a id="dropdowmia" href="https://www.apple.com/ios/app-store/" target="_blank"> App Store</a>
 							<a id="dropdowmia" href="https://play.google.com/" target="_blank">Play Store</a>
            	</div></li>
            <li><a id="ani" href="gallery.php" >Gallery</a></li>
          </ul>
       </nav>
       <p class="border" ></p>
   </header>
 </div>



  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/projekti.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<div style="clear: both; text-align: center;">
  <h1 style="color: white;font-family: Times-New-Roman;font-size: 40px; font:bold; color: #B86366" >Change your password</h1>
  <p style="color: white;font-family: Times-New-Roman;font-size: 25px;">Write the old password and verify the new one...</p>
</div>
<div class="align">
<div class="card">
<div class="head">
<div></div>
<a id="login" class="selected" href="#login">ChangePw</a>

<div></div>
</div>
<div class="">
</div>
<div class="tabs">
<form action="changePassword.php" id="change_Pass" method="post">
  <div class="inputs">
    <div class="input">
      <input placeholder="Old Password" type="password" required name="old" value="">
      <img src="img/pass.svg">
    </div>
    <div class="input">

      <input placeholder="New Password" name="newPassword" type="password" required value="">
      <img src="img/pass.svg">
    </div>
    <div class="input">
      <input placeholder="Verify Password" required type="password" name="verify">
      <img src="img/pass.svg">
    </div>
  </div>
  <input id="subb" type="submit" 	 name="change" value="Change Pw">

</form>
</div>
</div>
<input id="subb" type="submit" 	 name="change" value="Dont change"  style="margin-top:3em;"onclick="location.href='login_success.php'">
</div>

<?php require('footeri.php') ?>
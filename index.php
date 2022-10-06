<?php include ( "inc/connect.inc.php" ); ?>
<?php 
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
}
else {
	$user = $_SESSION['user_login'];
	$result = mysql_query("SELECT * FROM user WHERE id='$user'");
		$get_user_email = mysql_fetch_assoc($result);
			$uname_db = $get_user_email['firstName'];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to ebuy online shop</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="/js/homeslideshow.js"></script>
		<script>
		function showResult(str) {
		  if (str.length==0) {
		    document.getElementById("newsearch").innerHTML="";
		    document.getElementById("newsearch").style.border="0px";
		    return;
		  }
		  if (window.XMLHttpRequest) {
		    // code for IE7+, Firefox, Chrome, Opera, Safari
		    xmlhttp=new XMLHttpRequest();
		  } else {  // code for IE6, IE5
		    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange=function() {
		    if (this.readyState==4 && this.status==200) {
		      document.getElementById("newsearch").innerHTML=this.responseText;
		      document.getElementById("newsearch").style.border="1px solid #A5ACB2";
		    }
		  }
		  xmlhttp.open("GET","livesearch.php?q="+str,true);
		  xmlhttp.send();
		}
		</script>
	</head>
	<body style="min-width: 980px;">
		<div class="homepageheader" style="position: relative;">
			<div class="signinButton loginButton">
				<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="logout.php">LOG OUT</a>';
						}
						else {
							echo '<a style="color: #fff; text-decoration: none;" href="signin.php">SIGN IN</a>';
						}
					 ?>
					
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="profile.php?uid='.$user.'">Hi '.$uname_db.'</a>';
						}
						else {
							echo '<a style="text-decoration: none; color: #fff;" href="login.php">LOG IN</a>';
						}
					 ?>
				</div>
			</div>
			<div style="float: left; margin: 5px 0px 0px 23px;">
				<a href="index.php">
					<img style=" height: 75px; width: 130px;" src="image/ebuybdlogo.png">
				</a>
			</div>
			<div class="">
				<div id="srcheader">
					<form id="newsearch" method="get" action="search.php">
					        <input type="text" class="srctextinput" name="keywords" size="21" maxlength="120" onkeyup="showResult(this.value)" placeholder="Search Here..."><input type="submit" value="search" class="srcbutton" >
					</form>
				<div class="srcclear"></div>
				</div>
			</div>
		</div>
		<div class="home-welcome">
			<div class="home-welcome-text" style="background-image: url(image/homebackgrndimg1.png); height: 380px; ">
				<h1 style="margin: 0px;">Welcome To eBuy</h1>
				<h2>Largest Online Shopping In Bangalore</h2>
			</div>
		</div>
		<div class="home-prodlist">
			<div>
				<h3 style="text-align: center;">Products Category</h3>
			</div>
			<div style="padding: 20px 30px; width: 85%; margin: 0 auto;">
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="grocery/vegetables.php">
							<img src="./image/product/vegetables/product-1.jpg" class="home-prodlist-imgi">
							</a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="grocery/fruits.php">
							<img src="./image/product/fruits/category-2.jpg" class="home-prodlist-imgi">
							</a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="grocery/household.php">
							<img src="./image/product/household/1.png" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="grocery/bakery.php">
							<img src="./image/product/bakery/39.png" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="grocery/grains.php">
							<img src="./image/product/grains/wheat.jpg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="grocery/pulses.php">
							<img src="./image/product/pulses/tur.jpg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="grocery/diary.php">
							<img src="./image/product/diary/eggs.jpg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="grocery/cereal.php">
							<img src="./image/product/diary/cheese.jpg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
			</div>			
		</div>
	</body>
</html>
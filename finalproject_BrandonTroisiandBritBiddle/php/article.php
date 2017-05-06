<!-- 
file: article.php
Written by: Brit Biddle
April 30, 2017
CS325 Final Project

-->

<!DOCTYPE html>
<html>

<head>
	
	<link href="sidebar.css" type="text/css" rel="stylesheet"/>
	<link href="aboutpage.css" type="text/css" rel="stylesheet"/>
	<script src="aboutpage.js" type="text/javascript"></script>
	<link href="homepageBrit.css" type="text/css" rel="stylesheet"/>
	<!-- link to your script file here -->
	<script src="echo.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<title> Opinions </title>
	<link rel="icon" href="images/EchoBrowserLogo.jpg">
</head>

<body>
		<!-- php code begins -->
		<?php
			$category = "Insert Article Category";
			$articleName = "Insert Article Name";
			$author = "Insert Author Name";
			$date = "Insert Date";
			$p1 = "paragraph 1";
			$p2 = "paragraph 2";
			$p3 = "paragraph 3";
			$p4 = "paragraph 4";
			$p5 = "paragraph 5";
			$p6 = "paragraph 6";
		
		?>
		<!-- php code ends -->
	
		<!-- 
		code for top menu begins
		 -->
		<span class = "topHead">
		<p class = "headText"> <a href="aboutpage.html"> About</a> <a href="contactus.html">Contact</a> <a href="https://drive.google.com/file/d/0B1dTcM5PoFEncWlzaUpjLXNTMlU/view">Advertising</a> <a href="http://digital.olivesoftware.com/Olive/APA/ColbyCollege/default.aspx#panel=home">Archives</a> </p>
		<span class = "social" >
		<a href="https://www.facebook.com/thecolbyecho/">
		<img src="images/facebook.png" alt="Facebook" title="Connect with The Colby Echo on Facebook"
		width="30" height="30"/>
		</a>
		
		<a href="https://twitter.com/thecolbyecho">
		<img src="images/twitter.png" alt="twitter" title="Connect with The Colby Echo on Twitter"
		width="30" height="30"/>
		</a>
		
		<a href="https://www.youtube.com/channel/UC7VcREEoGMibDtK2fPX9LDg">
		<img src="images/youtube.png" alt="Youtube" title="Find The Colby Echo on Youtube"
		width="30" height="30"/>
		</a>
		</span>
		
		</span>
		

		<h1> <img src="images/miller.jpg" alt="miller" width="42" height="140.5"/> <a href="homepageBrit.html"> The Colby Echo </a> </h1>
		
		<h2>Published by the students of Colby College since 1877</h2>
		
		<!-- code for top menu begins -->
		<!-- div for menu starts -->
		<div class="menu">
		<ul>
  			<li><a href="homepageBrit.html">HOME</a></li>
  			<!-- dropdown menu div starts-->
  			<li> <div class ="dropdown"> <a  class="dropbtn" onclick= "aboutMenu()" style="display: block;" >ABOUT</a>
  				<!-- dropdown menu content div starts-->
  				<div id= "myDropdown" class="dropdown-content">
  					<a class="dropdown-content" href="aboutpage.html"> About Us </a>
  					<a class="dropdown-content" href="aboutpage.html"> The Team </a>
  					<a class="dropdown-content" href="contactus.html"> Contact Us </a>
  					<a class="dropdown-content" href="submitopinion.html"> Submit an Opinion </a>
  					<a class="dropdown-content" href="http://digital.olivesoftware.com/Olive/APA/ColbyCollege/default.aspx#panel=home"> Archives </a>
  				</div>
  				<!-- dropdown menu content div end-->
  			</div>
  			<!-- dropdown about menu  div ends-->
  			</li>
  			<!-- dropdown menu div ends-->
  			<li><a href="news.html">NEWS</a></li>
  			<li><a href="opinions.html">OPINION</a></li>
  			<li><a href="features.html">FEATURES</a></li>
  			<li><a href="local.html"> LOCAL</a></li>
  			<li><a href="art.html">ARTS AND ENTERTAINMENT</a></li>
  			<li><a href="sports.html">SPORTS</a></li>
		</ul>
		</div>
		<!-- code for top menu ends -->
	
	<!-- code for main page section starts -->
	<div class="subpageContent">
	<!-- start code for article section -->
	<div class='aboutSection'>
		<div class = "subTitle">
		<table>
  			<tr>
    			<th> <?php echo $category ?></th>
  			</tr>
  		</table>
		<p class="sectionHead"> <?php echo $articleName ?></p>
		</div>
		
		<!-- start article text -->
		<div class = "mainSection">
		<!-- <h3>  Article Name  </h3> -->
			<p class = "byline"> by <a> <?php echo $author ?> </a> </p>
			<p class = "byline"> <?php echo $date ?> </p>
			<p>
				<?php echo $p1 ?>
			</p>
			<p>
				<?php echo $p2 ?>
			</p>
			<p>
				<?php echo $p3 ?>
			</p>
			<p>
				<?php echo $p4 ?>
			</p>
			<p>
				<?php echo $p5 ?>
			</p>
			<p>
				<?php echo $p6 ?>
			</p>
		</div>
		<!-- end article text -->
		
		
	<!-- end code for article section -->
	</div>
	
	<!-- start code for side bar -->
	
		<div class='rightbar'>
		<h3> Search </h3>
		<script>
		//Start ajax code for search bar
			function showHint(str) {
				if (str.length == 0) { 
					document.getElementById("suggestions").innerHTML = "";
					return;
				} else {
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("suggestions").innerHTML = this.responseText;
						}
					};
					xmlhttp.open("GET", "echosuggestions.php?q=" + str, true);
					xmlhttp.send();
				}
			}
		//End ajax code for search bar
		</script>


		<form id=search action="searchecho.php" method="get"> 
		<!--Search bar!-->
		<input type="text" onkeyup="showHint(this.value)" name="search" placeholder="Search for an article">
		<input type="submit" value="Search" />
		</form>
		
		<p>Suggestions to search: <span id="suggestions"></span></p>
		<!--End search bar!-->
<!-- InstaWidget -->
	<a href="https://instawidget.net/v/user/colbycollege" id="link-afa7ce4466dcadeae952297204aaa1d45c9634d6cb016385e659f40de4364cdb">@colbycollege</a>
	<script src="https://instawidget.net/js/instawidget.js?u=afa7ce4466dcadeae952297204aaa1d45c9634d6cb016385e659f40de4364cdb&width=230px"></script> 
		<div class='topStories'>
		<h3> Latest Stories </h3>
		
			<ol>   
				<li> <a>Community Rethinks Bar Nights after over 20 Citations </a> </li>
				<li> <a>Boulos Donation to Help Fund Athletic Complex </a> </li>
				<li> <a>Professors Debate Partisanship in the Classroom </a> </li>
				<li> <a>Colby Students Win Trophies at Hackathon </a></li>
				<li> <a>Health Care Reform: Trump's Ticking Timebomb </a> </li>
			</ol>
		</div>
		<span class='head'>Tweets </span>
		<br>
		<a class="twitter-timeline" href="https://twitter.com/thecolbyecho" data-tweet-limit="3">Tweets by thecolbyecho</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		<br><br>
		<span class='head'>Follow <i>The Echo</i> on Social Media!</span>
		<br><br>
		<a href="https://www.facebook.com/thecolbyecho/">
		<img src="images/facebook.png" alt="Facebook" title="Connect with The Colby Echo on Facebook"
		width="30" height="30"/>
		</a>
		
		<a href="https://twitter.com/thecolbyecho">
		<img src="images/twitter.png" alt="twitter" title="Connect with The Colby Echo on Twitter"
		width="30" height="30"/>
		</a>
		
		<a href="https://www.youtube.com/channel/UC7VcREEoGMibDtK2fPX9LDg">
		<img src="images/youtube.png" alt="Youtube" title="Find The Colby Echo on Youtube"
		width="30" height="30"/>
		</a>
		
	
		<a href="https://drive.google.com/file/d/0B1dTcM5PoFEncWlzaUpjLXNTMlU/view">
		<img src="images/echoad.png" alt="Insert Ad Here" width="200" height="200" 
		title="Submit an ad to be featured on the Colby Echo!"/>
		</a>
		</div>
		<!-- start footer -->
		<div class="footer">
			<h1> The Colby Echo </h1>
 			<hr>
			<p>Copyright 2017 &#169 - The Colby Echo</p>
			<p> Designed by Brit Biddle '19 and Brandon Troisi '19</p>
			<a href="https://webster.cs.washington.edu/validate-html.php"><img src="https://webster.cs.washington.edu/w3c-html.png" alt="Valid HTML5" /></a>
			<a href="https://webster.cs.washington.edu/validate-css.php"><img src="https://webster.cs.washington.edu/w3c-css.png" alt="Valid CSS" /></a>
		</div>
		<!-- end footer -->
		</div>
	
	
</body>


</html>
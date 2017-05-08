<!-- 
file: contactus.html 
Written by: Brit Biddle
March 13, 2017
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
	<script src="echoformvalidation.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<title> The Colby Echo </title>
</head>

<body>
	
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
  					<a class="dropdown-content" href="aboutpage.html"> Archives </a>
  				</div>
  				<!-- dropdown menu content div end-->
  			</div>
  			<!-- dropdown about menu  div ends-->
  			</li>
  			<!-- dropdown menu div ends-->
  			<li><a href="news.html">NEWS</a></li>
  			<li><a href="opinions.html">OPINION</a></li>
  			<li><a href="features.html">FEATURES</a></li>
  			<li><a href="local.html">LOCAL</a></li>
  			<li><a>ARTS AND ENTERTAINMENT</a></li>
  			<li><a>SPORTS</a></li>
		</ul>
		</div>
		<!-- code for top menu ends -->
	
	
	<!-- start code for contact section -->
	<div class='aboutSection'>
		<div class = "subTitle">
		<p class="sectionHead">Contact Us</p>
		</div>
		<div class = "mainSection">
		
		<!-- code for form -->
		<form id="contactform" action="contactsubmit.php" method="post" onsubmit="return validate()">
		  <fieldset>
			<h2> JOIN THE ECHO TODAY! </h2>
			<p>
			  <label>Name:</label> 
			  <input type="text" id="name" name="name" ></input>
			</p>
			<p>
			  <label>Email:</label>
			  <input type="text" id="email" name="email"></input>
			</p>
			<p>
			  <label>Message:</label>
			  <br><textarea id="message" rows="20" cols="60" name="message" ></textarea>
			</p>
			<p>
			  <input type="submit" class="submit" name="submit" value="Submit"/>
			</p>
		 </fieldset>
		</form>
		
		</div>
	<!-- end code for about section -->
	</div>
	
	<!-- start code for side bar -->
	
		<div class='rightbar'>
		<h3> Search </h3>
		<textarea id="myTextarea" rows="1" cols="30" ></textarea><button id='Search'> Search </button>
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
		<a class="twitter-timeline" href="https://twitter.com/thecolbyecho">Tweets by thecolbyecho</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		
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
		
	
		<img src="images/ad.jpg" alt="Insert Ad Here" width="200" height="200"/>
		</div>
		<!-- end code for side bar -->
		
		<!-- start footer -->
		<div class="footer">
			<h1> The Colby Echo </h1>
 			<hr>
			<p>Copyright 2017 - The Colby Echo</p>
			<p> Designed by Brit Biddle '19</p>
		</div>
		<!-- end footer -->
	
	
</body>


</html>
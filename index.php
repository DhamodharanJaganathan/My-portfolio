<!--
Author: Prasun Raghuwanshi
Author URL: http://prasoon.cf
-->
<?php
		include('db.php');
			$msg=" ";
		if(isset($_POST['submit']))
		{
			$name = $_POST['Name'];
			$email= $_POST['Email'];
			$text =  $_POST['Message'];
			
		
				if(mysqli_query($dbhandle,"insert into prasun(name,email,message)VALUES('$name','$email','$text')"))
				{
					$msg= "<h2>Submmited......</h2>";
					mysqli_close($dbhandle);
				header("location: successfull.php");
				exit;
				}
			
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Personal Web Resume | prasoon</title>
		<!--mobile apps-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="My Resume Responsive web template, Bootstrap Web resume, Flat Web resume, Android Compatible web resume,
		SmartPhone Compatible web resume, free WebDesigns resume for Nokia, Samsung, LG, SonyEricsson, Motorola web design resume" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
		<meta name="theme-color" content="#6157ff"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="author" content="prasun"/>
		<meta name="author" content="www.prasun.com"/>
		<meta name="robots" content="index, follow"/>
		<meta name="language" content="English"/>
		<meta name="keywords" content="Protofolio,Resume,Myprofile" />
		<meta name="description" content="protofolio" />
		<!-- Favicon -->
		<link media="all" rel="icon" href="#" type="image/png" sizes="16x16"/>
		<!-- Css -->
		<link href="css/main.css" rel="stylesheet" type="text/css"/>
		<link href="css/ionicons.css" rel="stylesheet" type="text/css"/>
		<!--mobile apps-->
		<!--Custom Theme files-->
		<link type="image/.gif"rel ="icon " href ="download.gif"   style="border-radius:50px"/>
		<!--//end-smooth-scrolling-->
		<!--right click protecting-->
	<!-- 	<script language=JavaScript> var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false")
		</script> -->
		<!--end here-->
		<!--start ctrl+u cloas function-->
	<!-- 	<script>
		document.onkeydown = function(e) {
		if (e.ctrlKey &&
		(e.keyCode === 67 ||
		e.keyCode === 86 ||
		e.keyCode === 85 ||
		e.keyCode === 117)) {
		return false;
		} else {
		return true;
		}
		};
		$(document).keypress("u",function(e) {
		if(e.ctrlKey)
		{
		return false;
		}
		else
		{
		return true;
		}
		});
		</script> -->
		<!--end function-->
		<!--file ecription techniqe-->
		<SCRIPT language=”javascript” runat=”server”>
		function encodestr(s,k) {
		var sl=s.length;
		var kl=k.length;
		for(encodestr =”,i=0; i<sl; i++) {
		var encodedChar=s.charCodeAt(i)^k.charCodeAt(i%kl);
		encodestr += String.fromCharCode((encodedChar & 0x0F) + 97) + String.fromCharCode((encodedChar >> 4) + 97);
		}
		return encodestr;
		}
		</SCRIPT>
	</head>
	<body>
		<header>
			<nav>
				<div class="top-nav">
					<h5 onclick="location.href='#'">Welcome</h5>
					<div id="nav-icon2">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="nav-link" id="nav-link">
					<ul>
						<li><a href="#" data-scroll="about">About</a></li>
						<li><a href="#" data-scroll="skill">Skill</a></li>
						<li><a href="#" data-scroll="portfolio">Portfolio</a></li>
						<li><a href="#" data-scroll="contact">Contact</a></li>
						<li><button class="hire-btn ripple" onclick="location.href='Resume/prasun_resume.pdf'" download>Hire Me</button></li>
					</ul>
				</div>
			</nav>
		</header>
		
		<div class="wrapper">
			<div  class="bg-section">
				<section id="main" data-anchor="main" class="wave">
					<div class="bg-title">
						<h1>Hi,</h2>
						<h1 class="sub-title">I'm Prasun Raghuwanshi</h2>
						<h3 class="sub-title">Iam a 'Designer'</h3>
						<button  onclick="location.href='Resume/prasun_resume.pdf'" download class="download-cv" >Download CV</button>
					</div>
				</section>
			</div>
			<section id="about" data-anchor="about">
				<div class="about-title">
					<h2>About Me</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
				</div>
				<div class="about-second">
					<div class="about-img left">
						<img src="images/user.png" width="100%" />
						<div align="center">
							<ul align="center">
								<li><i class="ion-social-facebook"></i></li>
								<li><i class="ion-social-googleplus"></i></li>
								<li><i class="ion-social-twitter"></i></li>
								<li><i class="ion-social-linkedin"></i></li>
							</ul>
						</div>
					</div>
					<div class="about-info right">
						<h2>Hello, Iam Prasun Raghuwanshi</h2>
						<h4>Web developer & web designer</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
						</p>
						<br>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						<ul class="left-ul">
							<li><strong>Age:</strong> <span class="age">26</span></li>
							<li><strong>Address:</strong> <span class="addres">Whitefield Bangalore</span></li>
							<li><strong>Email:</strong> <span class="email">prasunboy5@gmail.com</span></li>
						</ul>
						<ul class="right-ul">
							<li><strong>Phone:</strong> <span class="phone">+91-9074510506</span></li>
							<li><strong>Website:</strong> <span class="website">www.prasun.com</span></li>
							<li><strong>Nationality:</strong><span class="indain">Indian</span></li>
						</ul>
						<div class="clearfix"></div>
						<div class="hirebtn">
							<button  onclick="location.href='Resume/prasun_resume.pdf'" download class="hire-me" >Download CV</button>
						</div>
					</div>
				</div>
			</section>
			<section id="skill" data-anchor="skill">
				<div  class="skill-title">
					<h2>My Skills</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
				</div>
				<div class="skill-progress">
					<div class="item-1">
						<strong>Html5</strong>
						<div class="progress-step">
							<div class="progress-width" style="width:85%">
								<div class="progress-per">
									85%
								</div>
							</div>
						</div>
					</div>
					<div class="item-1">
						<strong>Css3</strong>
						<div class="progress-step">
							<div class="progress-width" style="width:80%">
								<div class="progress-per">
									80%
								</div>
							</div>
						</div>
					</div>
					<div class="item-1">
						<strong>JavaScript</strong>
						<div class="progress-step">
							<div class="progress-width" style="width:70%">
								<div class="progress-per">
									70%
								</div>
							</div>
						</div>
					</div>
					<div class="item-1">
						<strong>Jquery</strong>
						<div class="progress-step">
							<div class="progress-width" style="width:75%">
								<div class="progress-per">
									75%
								</div>
							</div>
						</div>
					</div>
					<div class="item-1">
						<strong>Bootstrap</strong>
						<div class="progress-step">
							<div class="progress-width" style="width:85%">
								<div class="progress-per">
									85%
								</div>
							</div>
						</div>
					</div>
					<div class="item-1">
						<strong>Angular Js 2+</strong>
						<div class="progress-step">
							<div class="progress-width" style="width:65%">
								<div class="progress-per">
									65%
								</div>
							</div>
						</div>
					</div>
					<div class="item-1">
						<strong>Vue Js</strong>
						<div class="progress-step">
							<div class="progress-width" style="width:85%">
								<div class="progress-per">
									85%
								</div>
							</div>
						</div>
					</div>
					<div class="item-1">
						<strong>React Js</strong>
						<div class="progress-step">
							<div class="progress-width" style="width:35%">
								<div class="progress-per">
									45%
								</div>
							</div>
						</div>
					</div>
					<div class="item-1">
						<strong>PhotoShop</strong>
						<div class="progress-step">
							<div class="progress-width" style="width:65%">
								<div class="progress-per">
									65%
								</div>
							</div>
						</div>
					</div>
					<div class="item-1">
						<strong>Sketch</strong>
						<div class="progress-step">
							<div class="progress-width" style="width:55%">
								<div class="progress-per">
									55%
								</div>
							</div>
						</div>
					</div>
					<div class="item-1">
						<strong>Php</strong>
						<div class="progress-step">
							<div class="progress-width" style="width:65%">
								<div class="progress-per">
									65%
								</div>
							</div>
						</div>
					</div>
					<div class="item-1">
						<strong>Web Progressive ionic</strong>
						<div class="progress-step">
							<div class="progress-width" style="width:35%">
								<div class="progress-per">
									35%
								</div>
							</div>
						</div>
					</div>
					<br>
					
				</div>
			</section>
			<div class="project-section">
				<div class="sub-section">
					<div class="project1">
						<i class="ion-ios-bookmarks-outline"></i>
						<h1>100</h2>
						<h2>Project completed</h2>
					</div>
					<div class="project-runing">
						<i class="ion-ios-pricetags-outline"></i>
						<h1>200</h2>
						<h2>Project Running</h2>
					</div>
					<div class="project-database">
						<i class="ion-stats-bars"></i>
						<h1>100</h2>
						<h2>Database</h2>
					</div>
					<div class="project-happyClient">
						<i class="ion-happy-outline"></i>
						<h1>100</h2>
						<h2>Happy Clients</h2>
					</div>
				</div>
			</div>

			<section id="portfolio" data-anchor="portfolio">
				<div  class="portfolio-title">
					<h2>Portfolio</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
				</div>
				<div class="tab" align="center">
					<button>All</button>
				</div>
				<div id="all" class="tabcontent">
					<div class="item1">
						<img src="images/1.jpg" width="100%" alt="Avatar" class="image"/>
						  <div class="middle" onclick="location.href='#'">
						    <div class="text">Download App</div>
						  </div>
					</div>
					<div class="item1">
						<img src="images/1.jpg" width="100%" alt="Avatar" class="image"/>
						<div class="middle" onclick="location.href='#'">
						    <div class="text">Download App</div>
						  </div>
					</div>
					<div class="item1">
						<img src="images/1.jpg" width="100%" alt="Avatar" class="image"/>
						<div class="middle" onclick="location.href='#'">
						    <div class="text">Download App</div>
						  </div>
					</div>
					<div class="item1">
						<img src="images/1.jpg" width="100%" alt="Avatar" class="image"/>
						<div class="middle" onclick="location.href='#'">
						    <div class="text">Download App</div>
						  </div>
					</div>
					<div class="item1">
						<img src="images/1.jpg" width="100%" alt="Avatar" class="image"/>
						<div class="middle" onclick="location.href='#'">
						    <div class="text">Download App</div>
						  </div>
					</div>
					<div class="item1">
						<img src="images/1.jpg" width="100%" alt="Avatar" class="image"/>
						<div class="middle" onclick="location.href='#'">
						    <div class="text">Download App</div>
						  </div>
					</div>
				</div>
			</section>
			<section id="contact" data-anchor="contact">
				<div class="portfolio-title">
					<h2>Contact Me</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
				</div>
				<div class="contact-container">
					<div class="contact-form">
						<form class="form form-animate-fields" action="" method="post">
							<div class="form-field">
								<input class="form-input" type="text" name="Name" id="name" required="">
								<label for="firstname" class="form-label">
									<span class="form-label-content">First Name</span>
								</label>
							</div>
							<div class="form-field">
								<input class="form-input" type="email" name="Email" id="email" required="">
								<label for="email" class="form-label">
									<span class="form-label-content">Email Address</span>
								</label>
							</div>
							<div class="form-field">
								<textarea class="form-input" type="message" name="Message" id="message" required=""></textarea>
								<label for="message" class="form-label">
									<span class="form-label-content">Your Message</span>
								</label>
							</div>

								<a href="#" data-scroll="contact" class="scroll">
									<input class="hire-me" type="submit" value="SUBMIT" name="submit">
									<div style="text-align:center"><?php echo $msg?></div>
								</a>

						</form>
						
					</div>
					<div class="contact-address">
						<h4>More way to contact me.</h4>
						<div>
							<i class="ion-location"></i>
							<div class="contact-item">
								<strong>Address</strong>
								<p><a href="https://goo.gl/maps/SbMv4p2ZhyT2" target="_blank">whitefield mahadevpura. </a></p>
							</div>
						</div>
						<div>
							<i class="ion-paper-airplane"></i>
							<div class="contact-item">
								<strong>Email</strong>
								<p><a href="mailto:prasunboy5@gmail.com">prasunboy5@gmail.com</a></p>
							</div>
						</div>
						<div>
							<i class="ion-ios-telephone"></i>
							<div class="contact-item">
								<strong>Mobile number</strong>
								<p>+91-<a href="tel:907510506">907510506</a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<hr>
		<footer>
			<!-- <h4>&copy; 2018 All Right Reserved by prasun</h4> -->
			<h4 class="createdBy">Built with  <i class="ion-heart heart"></i> by Prasun Raghuwanshi</h4>
			<ul class="footer-icon">
				<li><i class="ion-social-facebook"></i></li>
				<li><i class="ion-social-googleplus"></i></li>
				<li><i class="ion-social-twitter"></i></li>
				<li><i class="ion-social-linkedin"></i></li>
				<li><a href="#" class="top" data-scroll="main"><i class="ion-chevron-up"></i></a></li>
			</ul>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/tab.js" type="text/JavaScript"></script>
	</body>
</html>
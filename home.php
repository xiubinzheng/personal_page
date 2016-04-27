<!DOCTYPE html>
<html lang="en">
<head>
<title></title>


<!-- Bootstrap core CSS -->
<?php include 'imports.php'?>

<style>
.caption {
	text-align: center;
}
</style>
</head>

<body>
      <?php include "header.php";?>
     
<div class="container">
		<br> <br> <br> <br> <br>
		<div class="row">
			<div class="col-xs-12">
				<div id="photo-header" class="text-center">
					<!-- PHOTO (AVATAR) -->
					<div id="photo">
						<img src="img/suit_headshot.jpg" alt="avatar">
					</div>
					<div id="text-header">
						<h1>
							Hello,<br> my name is <span>Xiubin Zheng</span> and this is my
							personal website/resume
						</h1>
						<br>
						<button type="button" onclick="location.href='getResume.php'">Download
							My Resume</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-7">
				<!-- ABOUT ME -->
				<div class="box">
					<h2>About Me</h2>
					<p>I am a software developer based out of Philadelphia,PA.</p>
				</div>
				<!-- EDUCATION -->
				<div class="box">
					<h2>Education</h2>
					<ul id="education" class="clearfix">

						<li>
							<div class="year pull-left">2011</div>
							<div class="description pull-right">
								<h3>Bachelor of Science in Computer Science</h3>
								<p>graduated with honor.</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="box">
					<h2>Experiences</h2>
					<div class="job clearfix">
						<div class="col-xs-3">
							<div class="where">Rieker Inc</div>
							<div class="year">2015-Present</div>
						</div>
						<div class="col-xs-9">
							<div class="profession">Web Application Developer</div>
							<div class="description">
								<ul>
									<li>Led the design and implementation of company E-commerce
										solutions from the grounds up</li>
									<li>Analyzed different technology and explored development
										strategies, successfully increased development speed by 30
										percent</li>
									<li>developed a user registration system for the entire company
										customer base</li>
									<li>Received needs and translated requirements directly from
										director of sales</li>
									<li>created a group management system that allows the user to
										edit the user hierarchy via the user interface</li>
									<li>Technologies used: PHP, Java, JavaScript, Jquery, CSS,
										HTML, LDAP, Postresql</li>
								</ul>
							</div>

						</div>
					</div>
					<div class="job clearfix">
						<div class="col-xs-3">
							<div class="where">BDP International Inc</div>
							<div class="year">2011-2014</div>
						</div>
						<div class="col-xs-9">
							<div class="profession">Java Web Developer</div>
							<div class="description">
								<ul>
									<li>Designed and implemented a hazardous materials check
										feature that helped the company secure a major client</li>
									<li>Trained new members to development team in best practices
										and development methodologies</li>
									<li>Served as the project lead of updating the build and
										release process, and resulting in a 50 percent productivity
										increase</li>
									<li>Received needs and translated requirements directly from
										director of sales</li>
									<li>Oversaw Quality Assurance for website with visibility to a
										large user base with upwards of 10 thousand global users</li>
									<li>Technologies used: Java, Java/EE Javascript, Jquery,
										Mybatis, Oracle, Struts MVC</li>
								</ul>
							</div>

						</div>
					</div>

					<div class="job clearfix">
						<div class="col-xs-3">
							<div class="where">Faulkner Enterprises LLC</div>
							<div class="year">2009-2011</div>
						</div>
						<div class="col-xs-9">
							<div class="profession">Web and Media Designer</div>
							<div class="description">
								<ul>
									<li>Built a Real Estate marketing website that allowed the
										company CEO to demo property photography and personal
										marketing materials, resulting in an increase of productivity
										and web presence</li>
									<li>Shot and edited Real Estate photography for marketing
										brochures</li>
									<li>Technologies used: HTML, CSS, JavaScript, Dreamweaver</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5">
				<!-- CONTACT -->
				<div class="box clearfix">
					<h2>Contact</h2>
					<div class="contact-item">
						<h4>Phone: <span class="info"> 2678157599</span></h4>
					</div>
					<div class="contact-item">
						<h4>email: <span class="info"> xiubin.zheng7@gmail.com</span></h4>
					</div>
					<div class="contact-item">
					<h4>Twitter: <span class="info"> https://twitter.com/xzheng011</span></h4>
					</div>
				</div>

				<!-- SKILLS -->
				<div class="box">
					<h2>Skills</h2>
					<div class="skills">
						<div class="item-skills" data-percent="1.00">Java</div>
						<div class="item-skills" data-percent="0.75">PHP</div>
						<div class="item-skills" data-percent="0.75">Oracle</div>
						<div class="item-skills" data-percent="0.50">Postgresql</div>
						<div class="item-skills" data-percent="0.50">mySQL</div>
						<div class="item-skills" data-percent="0.90">CSS</div>
						<div class="item-skills" data-percent="0.80">jQuery</div>
						<div class="skills-legend clearfix">
							<div class="legend-left legend">Beginner</div>
							<div class="legend-left legend">
								<span>Proficient</span>
							</div>
							<div class="legend-right legend">
								<span>Expert</span>
							</div>
							<div class="legend-right legend">Master</div>
						</div>
					</div>
				</div>
				<!-- LANGUAGES -->
				<div class="box">
					<h2>Languages</h2>
					<div id="language-skills">
						<div class="skill">
							English
							<div class="icons pull-right">
								<div style="width: 100%;" class="icons-red"></div>
							</div>
						</div>
						<div class="skill">
							Mandarin
							<div class="icons pull-right">
								<div style="width: 100%;" class="icons-red"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- HOBBIES -->
				<div class="box">
					<h2>Hobbies</h2>
					<div class="hobby">Photography</div>
					<div class="hobby">Fitness</div>
					<div class="hobby">Programming</div>
					<div class="hobby">Traveling</div>
				</div>
			</div>
		</div>


	</div>
    
    <?php include 'footer.php'; ?>
    <!-- JQUERY -->
	<script src="js/jquery.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="js/bootstrap.min.js"></script>
	<!-- SCRIPTS -->
	<script src="js/scripts.js"></script>
</body>
</html>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfoliio";
$name = "";
$email = "";
$subject = "";
$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$name = $_POST['Name'];
	$email = $_POST['E-mail'];
	$subject = $_POST['Sub'];
	$message = $_POST['Message'];

	$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
//   echo "Connected successfully<br>";

  $sql = "INSERT INTO messages (name, email, message, Subject)
	VALUES ('$name', '$email', '$message', '$subject')";

	if ($conn->query($sql) === TRUE) {
	// echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}

?>

<!DOCTYPE html>
<html>

<head>
	<!-- <link rel="icon" href="https://i.imgur.com/Iyw3bM6.png"> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
	<title>Portfolio</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" href="fonts/ionicons.min.css">
	<link rel="stylesheet" href="css/Contact-Form-Clean.css">
	<link rel="stylesheet" href="css/Footer-Basic.css">
	<link rel="stylesheet" href="css/Footer-Clean.css">
	<link rel="stylesheet" href="css/Footer-Dark.css">
	<link rel="stylesheet" href="css/Highlight-Clean.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
	<link rel="stylesheet" href="css/stylesheet.css">
</head>

<body style="overflow-x:hidden;">
	<!-- preloader -->
	<div id="preloading"></div>
	<nav  class="navbar navbar-light navbar-expand text-capitalize shadow-lg">
		<div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navcol-1"><img class="pulse animated infinite" src="https://i.imgur.com/nHh0kkT.png" width="100" loading="eager">
				<ul class="nav navbar-nav text-left d-xl-flex mx-auto">
					<li class="nav-item" role="presentation"><a class="nav-link active text-info" data-bs-hover-animate="jello" href="index.html">Home</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link text-info" data-bs-hover-animate="jello" href="#about">About Me</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link text-info" data-bs-hover-animate="jello" href="#skills">Skills</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link text-info" data-bs-hover-animate="jello" href="#exp">Experience</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link text-info" data-bs-hover-animate="jello" href="#contact">Contact</a></li>
					<li class="nav-item" role="presentation"></li>
					<li class="nav-item" role="presentation"></li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="particles-js"></div>
	<div>
		<h1 data-bs-hover-animate="flash" style=" opacity: 1;color: rgb(255,255,255);">Hi, i am Anshika Gupta</h1>
		<p style="color: rgb(255,255,255);">Known as <span class="typewrite" data-period='100' data-set='["Full Stack Web Developer.", "Flutter Developer.", "Content writer.", "Python Developer."]' data-delay='1000' data-loop='true'>
  </span></p>
		<img
		class="rounded-circle img-fluid bg-dark shadow" data-bs-hover-animate="swing" src="profile.jpeg" width="200" height="200" loading="auto" style="opacity: 1;filter: blur(0px) contrast(100%) grayscale(0%) hue-rotate(0deg) sepia(0%); ">
	</div>

		<h1 id="lets" class="text-center text-dark" data-aos="zoom-out" data-aos-delay="350" style="filter: blur(0px);font-size: 66px;">Lets Interact more....</h1>
		<div class="card-group" style="margin-top: 2%;margin-left: 50px;margin-right: 50px;">
			<div class="card1 border-white">
				<div class="card-body"><img id="mspic" data-aos="fade-right" data-aos-delay="200" src="interaction1.png" width="400" height="400"></div>
			</div>
			<div class="card1 border-white">
				<div class="card-body text-capitalize text-justify bg-white">
					<p class="text-justify card-text" data-aos="fade-left" data-aos-delay="400" style="margin-left: 1%;margin-right: 2%;margin-top: 18%;font-size: 20px;">I am second year Electronics and Communication Engineering Student from Guru Nanak Dev University, Amritsar. <br><br>An Enthusiastic full stack Web Developer &amp; speaker who&nbsp;is always eager to learn and implement as a final product.
						&nbsp;<br><br>Also python programmer who loves to codes on what the problem is there in surroundings. always ready to grab the opportunities.<br><br>To know more click on view profile for resume.</p>
				</div>
			</div>
		</div>
		<div style="margin-top: 20%;">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1 id="mprofile" class="text-center" data-aos="fade-right">Profile</h1>
						<p class="text-left" data-aos="zoom-in" style="margin-left: 0%;margin-top: 50px;font-size: 19px;"><i class="icon ion-social-freebsd-devil" style="width: auto;height: auto;"></i>&nbsp; &nbsp;Full stack Web Developer, kivy framework, Python Developer, flutter, Content writer.</p>
						<p data-aos="zoom-in" style="margin-left: 0%;font-size: 19px;"><i class="icon ion-social-python" style="width: auto;height: auto;"></i>&nbsp; &nbsp;Certified Blockchain Basic Expert .</p>
						<p data-aos="zoom-in" style="margin-left: 0%;font-size: 19px;"><strong>Name: </strong>Anshika Gupta<br><br><strong>Birthdate:</strong> 01/09/2001<br><br><strong>Professional Career: </strong>Full Stack Web Developer <br><br><strong>Phone: </strong>7889833766<br><br><strong>E-Mail: </strong>ansgupta.01@gmail.com&nbsp;<br><br></p>
					</div>
					<div class="col-md-6">
						<h1 id="mskills" class="text-center" data-aos="fade-left">Skills</h1>
						<p data-aos="zoom-in" style="font-size: 19px;margin-left: 0%;margin-top: 50px;">I am more of a Front End person than a developer. I have a huge passion in developing websites using <strong>HTML, CSS, JavaScript</strong> also <strong>Bootstrap</strong> for Designing &amp; <strong>MySQL.&nbsp;</strong>and trying to learn
							on the Angular and Huskling .<br><br></p>
							<div class="progress bg-secondary border rounded" data-aos="zoom-in" title="85%" style="height: 19px;font-size: 14px;filter: hue-rotate(291deg);">
								<div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
							</div>
							<p class="text-center" data-aos="zoom-in" style="font-size: 19px;margin-left: 0px;"><strong>HTML, CSS</strong></p>
							<div class="progress bg-secondary border rounded" data-aos="zoom-in" style="height: 19px;font-size: 14px;filter: hue-rotate(291deg);">
								<div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
							</div>
							<p class="text-center" data-aos="zoom-in" style="font-size: 19px;margin-left: 0px;"><strong>Bootstrap</strong></p>
							<div class="progress bg-secondary border rounded" data-aos="zoom-in" style="font-size: 14px;filter: hue-rotate(291deg);">
								<div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
							</div>
							<p class="text-center" data-aos="zoom-in" style="font-size: 19px;margin-left: 0%;"><strong>Java-Script</strong></p>
							<div class="progress bg-secondary border rounded" data-aos="zoom-in" style="filter: hue-rotate(291deg);font-size: 14px;">
								<div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
								80%</div>
							</div>
							<p class="text-center" data-aos="zoom-in" style="font-size: 19px;margin-left: 0%;"><strong>Python</strong></p>
							<div class="progress bg-secondary border rounded" data-aos="zoom-in" style="font-size: 14px;filter: hue-rotate(291deg);">
								<div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">60%</div>
							</div>
							<p class="text-center" data-aos="zoom-in" style="font-size: 19px;margin-left: 0%;"><strong>Flutter</strong></p>
						</div>
					</div>
				</div ><button id="view_profile"  onclick="window.open('https://drive.google.com/file/d/12nb1kNxQyz-08jVs00wS2Gvp7Ftop74z/view?usp=sharing')" class="btn btn-primary border rounded" data-bs-hover-animate="flash" type="button" style="background-color: rgb(59,192,247);" id="mview_profile">&nbsp;<i class="fa fa-street-view"></i><strong >&nbsp;View Profile&nbsp;</strong></button></div>



				<section id="timeline">
					<h1 class="text-center text-dark" data-aos="zoom-out" data-aos-delay="350" style="filter: blur(0px);font-size: 66px;margin-top: 15%;margin-left: 0%; margin-bottom: 13%;" id="edu">Education</h1>
					<article>
						<div class="inner">
							<span class="date">
								<span class="month">2023</span>
							</span>
							<h2>B.Tech in Electronics and Communication Engineering</h2>
							<p>Currently in 2nd year, pursuing my B.Tech at Guru Nanak Dev university, Amritsar.</p>
						</div>
					</article>
					<article>
						<div class="inner">
							<span class="date">
								<span class="month">2018</span>
							</span>
							<h2>12th</h2>
							<p>Completed my 12th standard successfully at J.M.K International School, Pathankot with 8.2 CGPA.</p>
						</div>
					</article>
				</section>

				<section id="timeline1">
					<h1 class="text-center text-dark" data-aos="zoom-out" data-aos-delay="350" style="filter: blur(0px);font-size: 66px;margin-top: 15%;margin-left: 0%; margin-bottom: 13%;" id="exp">Experience</h1>
					<article>
						<div class="inner">
							<span class="date">
								<span class="month">2021</span>
							</span>
							<h2>Web Developer</h2>
							<p>Web Developing working on a live project by MissionEd Company.</p>
						</div>
					</article>
					<article>
						<div class="inner">
							<span class="date">
								<span class="month">2019</span>
							</span>
							<h2>Python Developer</h2>
							<p>Python Developer with MRND Pvt Ltd. Completed Data Analysis mini-project with GUI using PyQt5.</p>
						</div>
					</article>
					<article>
						<div class="inner">
							<span class="date">
								<span class="month">2017</span>
							</span>
							<h2>Web Designer</h2>
							<p>Front-end Designer with DreamWorth Pvt Ltd.</p>
						</div>
					</article>
				</section>

<h1 class="text-center" data-aos="zoom-in" style="margin: 12% 0 5% 0;">Achievements</h1>
<div style="margin-bottom: 15%;">
				<main class="page-content">
  <div class="card">
    <div class="content">
      <h2 class="copy">Project</h2>
      <p class="copy"Till now worked on 5 projects. In which 3 live projects and 2 normal projects</p>
    </div>
  </div>
  <div class="card">
    <div class="content">
      <h2 class="copy">Prize</h2>
      <p class="copy">Came in top 10 from 91 team in Hack for Women Hackathon conducted by Girlscript Organisation .<br>Secured 9 position in Hackathon organised by Hack the Mountain with the theme Argumented Reality (Fusion AR).<br></p>
    </div>
  </div>
  <div class="card">
    <div class="content">
      <h2 class="copy">Certifications</h2>
      <p class="copy">25+ certifications in various field also having basic knowledge on it.</p>
    </div>x
  </div>
  <div class="card">
    <div class="content">
      <h2 class="copy">Internship</h2>
      <p class="copy">5 internship in web development this year in good recognised companies.</p>
    </div>
  </div>
</main>
</div>

			<form method="POST" action = "" autocomplete="off">
			<div   id="contact">
				<div class="container">
					<h1 class="text-center" data-aos="zoom-in" style="margin-left: 0%; margin-top: -18%;">Connect To Me</h1>
					<div class="row" style="margin-top: 7%;">
						<div class="col-md-6"><img class="bg-secondary border rounded-circle shadow" data-bs-hover-animate="pulse" src="connect.jpg" width="170px" style="margin-left: 32%;margin-top: 0px;">
							<p class="text-justify" style="margin-left: 0%;margin-top: 7%;">Feel free to talk to me about anything that bothers you. If you need a helping hand, please don't hesitate to contact me. Got a question on my skills? I am just a click away.<br><br></p>
						</div>
						<div class="col-md-6">
							<h4 class="text-center" data-aos="fade" style="margin-bottom: 10%;">Say Hi To Me</h4>
							<input class="border rounded shadow-sm" type="text" style="/*filter: blur(0px);*/margin-left: 3%;width: 90%;" placeholder="Name" name="Name">
							<input class="border rounded shadow-sm" type="email" style="margin-left: 3%;width: 90%; margin-top: 4%;"placeholder="E-Mail" name="E-mail">
							<input class="border rounded shadow-sm" type="text" style="margin-top: 4%;/*size: 100;*//*margin-right: 0%;*/margin-left: 3%;width: 90%;" placeholder="Subject" name="Sub">
							<textarea class="border rounded shadow-sm"
							style="margin-top: 4%;margin-left: 3%;resize: none;width: 90%;height: 100px;" wrap="hard" placeholder="Message" name="Message"></textarea>
							<button class="btn btn-primary" name="submit" data-bs-hover-animate="flash" type="submit" style="margin-top: 2%;margin-left: 40%;background-color: rgb(59,192,247);">&nbsp;<strong>Submit&nbsp;</strong></button>
						</div>
						</div>
					</div>
				</div>
			</form>

				<script>
            const scriptURL = 'https://docs.google.com/spreadsheets/d/1Bi38OeUaKIGFUqUFxDApT9hYSEkagmV_JD-WBwo2joc/edit#gid=0'
            const form = document.forms['google-sheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Happy To Connect With You!!!!!"))
                .catch(error => console.error('Error!', error.message))

                var frm = document.getElementsByName('google-sheet')[0];
            frm.reset();
            return false;
            })

          </script>


				<div class="text-white bg-dark shadow footer-basic" style="margin-top: 10%;">
					<footer>
						<div class="social">
							<a href="https://www.github.com/Anshika66-Gupta"><i class="icon ion-social-github"></i></a><a href="https://www.linkedin.com/in/anshika-gupta-36711419b"><i class="icon ion-social-linkedin"></i></a><a href="https://www.instagram.com/anshikagupta4324"><i class="icon ion-social-instagram"></i></a><a href="https://www.twitter.com/ANSHIKA71688056"><i class="icon ion-social-twitter"></i></a></div>
						<ul class="list-inline">
							<li class="list-inline-item" style="margin-left: -6%;"><a class="text-white" href="#" style="margin-left: 95px;" href="index.html">Home</a></li>
							<li class="list-inline-item"><a class="text-white" href="#about">About Me</a></li>
							<li class="list-inline-item"><a class="text-white" href="#skills">Skills</a></li>
							<li class="list-inline-item"><a href="#exp">Experience</a></li>
							<li class="list-inline-item"><a href="#contact">Contact</a></li>
						</ul>
						<p target="_blank" class="btn-shine text-center copyright">Copyright © 2020 Anshika Gupta</p>
					</footer>
				</div>

				<script src="js/jquery.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/bs-init.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
				<script>
		    window.onload = function() {
        var pre = document.getElementById('preloading');
        pre.style.display = 'none';
        
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-set'),
                period = elements[i].getAttribute('data-period'),
                delay = elements[i].getAttribute('data-delay'),
                loop = elements[i].getAttribute('data-loop');
                //optional data
                delay = (!delay) ? '1000' : delay;
                loop = (!loop) ? 'true' : loop;
            if (toRotate) {
              new typeWrite(elements[i], JSON.parse(toRotate), period, delay, loop);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > span { border-right: 1px solid #fff}";
        css.innerHTML += ' @keyframes typewrite { from{border-right-color: black;} to{border-right-color: transparent;}}';
        css.innerHTML += ' .typewrite > span {animation-name: typewrite; animation-duration: 1s; animation-iteration-count: infinite;}';
        document.body.appendChild(css);
    };
	</script>
			</body>

			</html>
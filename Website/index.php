<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Spencer Worms</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			var i = 1;
			$( "#showPictures" ).click(function() {
				$('#images').toggle();
			});
			
			
			var images = ["StartDeck", "NoDeck", "Start", "Begining", "Midway", "Final"];
			
			$('#image').click(function () {
				
				this.src = 'images/' + images[i] + '.jpg';
				i++;
				if(i >= images.length){
					i = 0;
				}
			});
			
			
			$("#myForm").submit(function(){
				if($("#FirstName").val() === "" || $("#LastName").val() === "" || $("#EmailAddress").val() === "" || $("#Message").val() === ""){
					alert("One of the inputs of the form is empty. Please enter all the forms.");
					return false;
				}
				
				var x = document.forms["myForm"]["EmailAddress"].value;
				var hasAt = x.indexOf("@");
				var hasPeriod = x.indexOf(".");
				if(hasAt == -1 || hasPeriod == -1){
					alert("Bad email address, needs a period and an @.");
					return false;
				}
				return true;
				
				
				
				
			});
			
			
			
		});
	</script>
	
	
	
	
	

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"  link="red" vlink="red" alink="red">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Spencer Worms</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About Me</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#skills">My Skills</a>
                    </li>
					<li>
						<a class="page-scroll" href="#picture">Pictures</a>
					</li>
					<li>
                        <a class="page-scroll" href="#experience">Experience</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact Me</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<?php include "includes/top.php" ?>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<?php include "includes/about.php"?>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<?php include "includes/skills.php"?>
                </div>
            </div>
        </div>
    </section>
	
	<!-- Pictures Section -->
    <section id="picture" class="picture-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<?php include "includes/pictures.php"?>
                </div>
            </div>
        </div>
    </section>
	
	<!-- Experience Section -->
    <section id="experience" class="experience-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<?php include "includes/experience.php"?>
                </div>
            </div>
        </div>
    </section>
	
    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<?php include "includes/contact.php"?>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>

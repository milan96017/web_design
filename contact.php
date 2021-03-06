<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Greetings</title>
	<link rel="stylesheet" href="css/mystyle.css">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic+SC" rel="stylesheet">
</head>
<body>
	<header role="banner">
        <nav id="my-header-nav" class="navbar navbar-default" role="Navigation">
            <div class="container">
                <div class="navbar-header" >
                    <a href="homepage.html" class="pull-left">
                            <div id="logo-img" alt="logo image">
                            
                            </div> <!--closes logo div -->
                        </a>

                        <div class="navbar-brand" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <!-- to keep my name in center -->

                            <a href="homepage.html"><span id="site-name">Milan Patel </span></a>
                            <div>
                            <p></p>     <!--just to put my name in center -->
                            <a href="homepage.html"><span id="site-subname">Design Portfolio </span></a>
                            </div>
                        </div> 
                </div>

                <div id="collapsable-nav" class="collapse navbar-collapse" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >

                        <ul id="nav-list" class="nav navbar-nav navbar-right"  >
                            <li>
                                <a href="milan_portfolio.html">
                                    <span class="glyphicon glyphicon-question-sign"></span>
                                    <br class="hidden-xs">Portfolio</a>
                            </li>

                            <li>
                                <a href="new_about_me.html">
                                    <span class="glyphicon glyphicon-picture"></span>
                                    <br class="hidden-xs">About Me</a> 
                            </li>

                            <li>
                                <a href="contact.html">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                    <br class="hidden-xs">Contact</a>
                            </li>
                            
                            
                        </ul>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">

                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        
                    </button>


            </div>
        </nav>

    </header>

	<main role="main">
		<section class="jumbotron"> <!--this is my page header -->
    	<div class="container">

		<?php

			$Userfirstname = $_POST['first_name'];
			$UserLastname = $_POST['last_name'];
			$Mobile = $_POST['mobile'];
			$EmailId = $_POST['email'];
			$City = $_POST['city_name'];
			$Profile = $_POST['profile'];
		
		?>


	<h1>Thank you <?php echo $Userfirstname; ?>  <?php echo $UserLastname; ?>!! <br>
	</h1>

	<h2>		
			Your <span id="userinfo"><?php echo $Profile; ?></span> profile is created under email id: <span id="userinfo"><?php echo $EmailId; ?></span><br>
            and Mobile number : <span id="userinfo"><?php echo $Mobile; ?></span><br>
			Someone from our <span id="userinfo"><?php echo $City; ?></span> office will contact you soon.
				
	</h2>

		</div>
		</section>
	</main>

<footer id="my-footer" class="panel-footer" role="contentinfo">
    <div class="container">
      <div class="row">
        
        <section id="testimonials" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h3>Words from my clients?</h3>
          <p>"This is some of the best UX work I've seen"</p>
          <p>"This UX guru did amazing work for me!"</p>
          <p>"This IMM Grad is Awesome..!!"</p>
        </section>

        <section id="socialmedia" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            
            <p>&nbsp;</p> <!--to keep my social media icons on center -->

            <a href="https://www.instagram.com/mr.almostperfect/" target="_blank" class="pull-right" >
                <div id="in-img" alt="instagram_link">
                </div>
            </a>

            <a href="https://www.facebook.com/patel.milan.20" target="_blank" class="pull-right" >
                <div id="fb-img" alt="facebook_link">
                </div>
            </a>
            
            <a href="https://www.linkedin.com/in/milan-patel-5458b47b/" target="_blank" class="pull-right" >
                <div id="li-img" alt="linkdin_link">
                </div>
            </a>
            
            
        

        </section>



        

      </div> <!-- closes class row-->
      <div class="text-center">&copy; Milan Patel Portfolio</div>
    </div> <!-- closes class container-->
  </footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
			
</body>
</html>
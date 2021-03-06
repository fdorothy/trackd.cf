<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <title>Sharkfin | Designed By Theme Armada</title>
  <meta name="keywords" content="flat bootstrap, bootstrap themes, creative responsive websites, illustration bootstrap design, blue responsive themes, mobile menu website">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  
  <meta property="og:title" content="Sharkfin | Designed By Theme Armada">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://www.themearmada.com/demos/sharkfin">
	<meta property="og:site_name" content="Theme Armada">
	<meta property="og:description" content="flat bootstrap, bootstrap themes, creative responsive websites, illustration bootstrap design, blue responsive themes, mobile menu website">

  <!-- Styles -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/custom-styles.css">

  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="/favicon.png">
</head>

<body>
        
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="index.html"><img src="img/logo.png" alt="Logo"></a>
        <div class="nav-collapse collapse">
          <ul class="nav pull-right">
            <li><a href="index.html">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
              <ul class="dropdown-menu">
                <li><a href="full-width.html">Full Width</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="blog-article.html">Blog Article</a></li>
                <li><a href="login.html">Log In</a></li>
                <li><a href="signup.html">Sign Up</a></li>
              </ul>
            </li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="blog.html">News</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
            <li class="sign-up"><a href="signup.html"><span class="white"> Sign Up</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  
  
  <!--Page Title-->
  <section id="page-title">
    <div class="container">
      <div class="row">
        <div class="span12 title-white">
          <h2>Contact</h2>
        </div>
      </div>
    </div>
  </section>
  
  
  <!--Content Section-->
  <section id="content">
    <div class="container">
      
      <div class="row">
        <div class="span8">
          
          <?php  

            // check for a successful form post  
            if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
      
            // check for a form error  
            elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
      
            ?>  
          
          <form method="POST" action="contact-form-submission.php">
            <input type="text" class="span8" name="contact_name" placeholder="Name">
            <input type="text" class="span8" name="contact_email" placeholder="Email">
            <input type="text" class="span8" name="contact_subject" placeholder="Subject">
            <textarea class="span8" name="contact_message" placeholder="Message"></textarea>
            <input type="hidden" name="save" value="contact">
            <p><button class="btn-main" type="submit">Send Message</button></p>
          </form>
        </div><!--End Span8-->
        
        <div class="span4">
          <p class="lead">Side Bar Title<p>
    				<p class="gray">Lorem <a href="#">ipsum dolor</a> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        
      </div><!--End Row-->   
    </div>
  </section> 
   

  
  <!--Map Section-->
    <section id="map">
    
      <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=atlanta&amp;aq=&amp;sll=32.678125,-83.178297&amp;sspn=8.89966,16.907959&amp;ie=UTF8&amp;hq=&amp;hnear=Atlanta,+Fulton,+Georgia&amp;t=m&amp;z=6&amp;iwloc=A&amp;output=embed"></iframe>
      
    </section>
    
    
    <!--Bottom Section-->
    <section id="bottom">
      <div class="container">
        <div class="row margin-40">
          <div class="span10 offset1 text-center">
            <p>1234 Main Street Atlanta, GA 30305 | 404.555.5555  |  <a href="mailto:support@themearmada.com"><i class="icon-envelope-alt"></i> support@themearmada.com</a></p>
            <hr>
          </div>
        </div>
        
        <div class="row">
          <div class="span10 offset1 text-center">
            <!--Social Icons-->          
            <ul class="social-icons">
    					<li><a class="twitter" href="http://www.twitter.com/themearmada" target="_blank"><i class="icon-twitter icon-3x"></i></a></li>
    					<li><a class="facebook" href="http://www.facebook.com" target="_blank"><i class="icon-facebook icon-3x"></i></a></li>
    					<li><a class="google" href="http://www.googleplus.com" target="_blank"><i class="icon-google-plus icon-3x"></i></a></li>
    					<li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="icon-camera-retro icon-3x"></i></a></li>
    					<li><a class="pinterest" href="http://www.pinterest.com" target="_blank"><i class="icon-pinterest icon-3x"></i></a></li>
    					<li><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i class="icon-linkedin icon-3x"></i></a></li>
    					<li><a class="Github" href="http://www.github.com" target="_blank"><i class="icon-github-alt icon-3x"></i></a></li>
    				</ul>
          </div>
        </div>
        
      </div>
    </section>
    
    
    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="span12 text-center">
            <p>@ Copyright. All Rights Reserved. Created by <a href="http://www.themearmada.com">Theme Armada.</a></p>
          </div>
        </div>
      </div>
    </section>

    
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
   
    </body>
</html>
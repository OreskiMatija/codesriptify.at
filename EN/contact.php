<?php
if (isset($_POST['submit'])) { 
    $status = 0;
    
    // Retrieve form data
    $firstname = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    
    // Email recipient
    $to = "info@codescriptify.at, oreskimatija@gmail.com";
    
    // Email subject
    $email_subject = "New Contact Form Submission from $firstname $lastName";
    
    // Email body
    $email_body = "
    You have received a new message from your website contact form English.\n\n
    Here are the details:\n
    Name: $firstname $lastName\n
    Email: $email\n
    Message:\n$subject";
    
    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        $status = 1; // Success
    } else {
        echo "Error: Email could not be sent.";
    }
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>Codescriptify - contact</title>
<meta name="description" content="Software & Graphic design - contact" />
<meta name="keywords" content="Software, software, graphic design, design, graphic, web, web design, web site, website, websites, solutions, custom, custom solutions" />
<meta name="author" content="CODESCRIPTIFY" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

<link rel="icon" href="../images/icon.png" type="image/x-icon">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="../js/jquery.bxslider.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,100italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">



<script>
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
</script>

<script>
$(document).ready(function() {
		
	var respmenu 		= $('#respmenu');
	var	menu 			= $('#nav>ul');

	$(respmenu).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	$(window).resize(function(){
		var sirina = $(window).width();
		if(sirina > 768 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}	
	});
    
    $(document).on('click', '#facebook', function() {
        alert('Sorry! It is still developing :(');
    });
    $(document).on('click', '#twitter', function() {
        alert('Sorry! It is still developing :(');
    });
    $(document).on('click', '#linkedin', function() {
        alert('Sorry! It is still developing :(');
    });
	
});	
	


</script>



</head>

<body>

<a name="top"></a>
	<header id="header">
    
    	<div id="headerTop">
        	<div class="wrapper">
            	<div id="headerTopLeft">
					<span style="margin-right:25px;"><i class="fa fa-lg fa-phone"></i>&nbsp;&nbsp;&nbsp;+385 95 8552378</span>
					<span style="margin-right:1px;"><i class="fa fa-lg fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;info@codescriptify.at</span>
                </div>
            	<div id="headerTopRight">
                	<a id="facebook" href="#"><i class="fa fa-lg fa-facebook-square"></i></a>
                	<a id="twitter" href="#"><i class="fa fa-lg fa-twitter-square"></i></a>
                	<a id="linkedin" href="#"><i class="fa fa-lg fa-linkedin-square"></i></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../contact.php"><img src="../images/de.png" alt="DE"></a>
                    <a href="contact.php"><img src="../images/uk.png" alt="UK"></a>
                    <a href="../HR/contact.php"><img src="../images/hr.png" alt="HR"></a>
                </div>
            </div>
        </div>
        
        <div id="headerBottom">
        	<div class="wrapper">
            
            	<div id="logo">
                	<a href="index.php">
                    	<img src="../images/logo.png" alt="logo">
                    </a>
                </div>
                
                <nav id="nav">
                	<ul>
                        <li><a href="index.php">home</a></li>
                    	<li><a href="about.php">about us</a></li>
                    	<li><a href="products.php">products</a></li>
                    	<li><a href="news.php">news</a></li>
                    	<li><a href="contact.php">contact</a></li>
                    </ul>
                    <a href="#" id="respmenu" class="button"><i class="fa fa-lg fa-navicon"></i>&nbsp;&nbsp;&nbsp;&nbsp;Navigation</a>
                </nav>
            
            </div>
        </div>   
    
    </header><!-- kraj #header -->
    
    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2660.419810728711!2d16.377615276273676!3d48.17926234825845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476da9db22d5d1df%3A0x4723f03492396a9d!2sAntonie-Alt-Gasse%2016%2C%201100%20Wien!5e0!3m2!1sen!2sat!4v1695198763954!5m2!1sen!2sat" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    <section id="central" style="padding: 10px 0 20px 0;">
    
    
    	<div class="wrapper">
        
        	<main id="mainFull">

            	<h1>Contact us</h1>
                
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="firstName"><h6>First Name</h6></label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName"><h6>Last Name</h6></label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><h6>Email</h6></label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject"><h6>Subject</h6></label>
                        <textarea id="subject" name="subject" required></textarea>
                    </div>
                    <div class="form-group">
                        <input id="submit" type="submit" name="submit" value="Submit">
                    </div>
                </form>
                
            </main>
        
            
        </div>
    </section>
    
    <footer id="footer" class="negative">
    	<div class="wrapper">
    		
            <div class="footerBlock">
            	<h3>You have questions?</h3>
            	<p class="bold"><i class="fa fa-lg fa-envelope-o"></i> info@codescriptify.at</p>
            </div>
            <div class="footerBlock">
            	<h3>Lett us know!</h3>
            	<p class="bold">Antonie-Alt Gasse 16<br>1100 Wien</p>
            </div>
            
            <div class="footerBlockR">
            	<img src="../images/logo.png">
            </div>
            
    	</div>
        <div class="wrapper" id="footerBottom">
        	<a href="#top" class="button">back to top</a>
        	<p>Copyright @ codescriptify // <a href="policy.php">privacy / cookie policy</a> </p>
        
        </div>
    </footer>
    <?php
        if($status == 1){
            echo '<script>swal("Good job!", "Your email has been sent!", "success")</script>;';
        }
    ?>
    

</body>
</html>
























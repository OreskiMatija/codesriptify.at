<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>Codescriptify - home</title>
<meta name="description" content="Software & Graphic design - about us" />
<meta name="keywords" content="Software, software, graphic design, design, graphic, web, web design, web site, website, websites, solutions, custom, custom solutions" />
<meta name="author" content="CODESCRIPTIFY" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

<link rel="icon" href="../images/icon.png" type="image/x-icon">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="../js/jquery.bxslider.min.js"></script>

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
					<span style="margin-right:25px;"><i class="fa fa-lg fa-phone"></i>&nbsp;&nbsp;&nbsp;+43 699 19520435</span>
					<span style="margin-right:1px;"><i class="fa fa-lg fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;info@codescriptify.at</span>
                </div>
            	<div id="headerTopRight">
                	<a id="facebook" href="#"><i class="fa fa-lg fa-facebook-square"></i></a>
                	<a id="twitter" href="#"><i class="fa fa-lg fa-twitter-square"></i></a>
                	<a id="linkedin" href="#"><i class="fa fa-lg fa-linkedin-square"></i></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../about.php"><img src="../images/de.png" alt="DE"></a>
                    <a href="about.php"><img src="../images/uk.png" alt="UK"></a>
                    <a href="../HR/about.php"><img src="../images/hr.png" alt="HR"></a>
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
    
    
    
    <section id="central">
    	<div class="wrapper">
        
        	<main id="mainFull">
				<p><img src="../images/about-banner.jpg" alt=""></p>

            	<h1>We are CODESCRIPTIFY</h1>
                <p>We are a diverse group of software engineers, designers, and creative thinkers who love what we do. Our collective expertise spans a wide range of technologies and industries, allowing us to tackle projects of any scale or complexity. We envision a world empowered by technology, where every problem has a digital solution. We believe that software is the driving force behind progress and strive to be at the forefront of this transformative journey. Welcome to us, where innovation meets excellence in the world of software development. We are a team of passionate and dedicated professionals driven by the mission to turn your ideas into cutting-edge software solutions.</p>
                <h3>Our Vision</h3>
                <p>At Your CODESCRIPTIFY, we envision a world empowered by technology, where every problem has a digital solution. We believe that software is the driving force behind progress and strive to be at the forefront of this transformative journey.</p>
                <h3>What Sets Us Apart</h3>
                <p><strong>Innovation:</strong> We thrive on pushing boundaries and embracing emerging technologies to deliver solutions that exceed expectations.<br>
                   <strong>Client-Centric:</strong> Your success is our success. We work closely with you to understand your unique needs and tailor solutions that align with your goals.<br><strong>Quality Focus:</strong> We are obsessed with quality. Every line of code we write, every design element we create, is meticulously crafted to ensure excellence.<br><strong>Timely Delivery:</strong> We understand the importance of time in today's fast-paced world. We are committed to delivering on time, every time.
                </p>
                <h3>Let's Collaborate</h3>
                <p>We believe that great software is born from collaboration. Whether you're a startup looking to disrupt an industry or an established enterprise seeking to streamline operations, we're here to partner with you on your journey to success.</p>
            </main>
        
            
        </div>
    </section>
    <p><br></p>
    
    
    
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
    

</body>
</html>
























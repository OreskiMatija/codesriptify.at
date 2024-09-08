<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>Codescriptify - home</title>
<meta name="description" content="Software & Graphic design - home" />
<meta name="keywords" content="Software, software, graphic design, design, graphic, web, web design, web site, website, websites, solutions, custom, custom solutions" />
<meta name="author" content="CODESCRIPTIFY" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

<link rel="icon" href="../images/icon.png" type="image/x-icon">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="../js/jquery.bxslider.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">

<script>
$(document).ready(function(){
  $('.partners').bxSlider({
    slideWidth: 220,
    minSlides: 2,
    maxSlides: 6,
    slideMargin: 25,
	moveSlides: 1,
	pager: false,
	auto: true
  });
});
</script>


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
                    <a href="../index.php"><img src="../images/de.png" alt="DE" title="DE"></a>
                    <a href="index.php"><img src="../images/uk.png" alt="UK" title="UK"></a>
                    <a href="../HR/index.php"><img src="../images/hr.png" alt="HR" title="HR"></a>
                    
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
    
    
    <article id="hero" class="negative">
    	<div class="wrapper">
        
        
        	<h1>Software &amp; Graphic design</h1>
            <p>A web solution that drives your business forward</p>
            <p>We are here with the mission to make your wishes come true - to create custom software with a smile on both our faces.</p>
            <p><a href="news.php" class="button">New products &raquo;</a></p>
        
        </div>    
    </article>
    
    
    <section id="products">
    	<div class="wrapper">
        	
            <header>
            	<h2>Our great products</h2>
                <p><em>The only thing you need to do is decide where you want your business to improve. And even if you don't have a clear idea, no worries – these nerdy minds always have an ace up their sleeve to support you, from idea to realization and beyond.</em></p> 
                <p>Our secret ingredient is a balance of functionality and creativity, delivering an outstanding digital experience. Explore our range of innovative software solutions designed to meet your business needs. We take pride in delivering cutting-edge products that drive efficiency, enhance user experiences, and propel your business forward.</p>
            </header>
            
			<div id="products-container">
				<article class="product">
					<span>
						<i class="fa fa-paper-plane"></i>
					</span>
					<h2>Software Development</h2>
					<p>We provide you with our talent for you all kinds of software. Just tell us what you need.</p><br>
					<p><a href="products.php" class="button">Learn more &raquo;</a></p>
				</article>

				<article class="product">
					<span>
						<i class="fa fa-star"></i>
					</span>
					<h2>Web design</h2>
					<p>We provide websites and Graphic designs tailored to your preferences and your personal wishes.</p><br><br>
					<p><a href="products.php" class="button">Learn more &raquo;</a></p>
				</article>

				<article class="product">
					<span>
						<i class="fa fa-cog"></i>
					</span>
					<h2>PIM (Pimcore)</h2>
					<p>Pimcore is the most famous Product Information Management (PIM) platform. We can do it for you.</p>
					<p><a href="products.php" class="button">Learn more &raquo;</a></p>
				</article>

				<article class="product">
					<span>
						<i class="fa fa-umbrella"></i>
					</span>
					<h2>Custom solutions</h2>
					<p>You have a project that needs full support to execute. We offer a solutions tailored to your specific needs.</p>
					<p><a href="products.php" class="button">Learn more &raquo;</a></p>
				</article>
			</div>
            
        </div>    
    </section>
    
    
    
    <article id="about" class="negative">
    	<div class="wrapper">
        
        	<div class="back">
                <h2>About us and our team</h2>
                <p>Welcome to <strong>CODESCRIPTIFY</strong>, your trusted partner in the world of Information Technology. We are a passionate team of IT professionals dedicated to delivering innovative solutions, leveraging cutting-edge technology, and providing exceptional service to our clients.Our team consists of highly skilled and experienced professionals who are at the forefront of the ever-evolving IT landscape. From software development and network security to cloud solutions and data analytics, we have the knowledge and expertise to address a wide range of IT needs.</p>
                <p><a href="about.php" class="button">Learn more &raquo;</a></p>
       		</div>
       
        </div>
    </article>
    
    
    <section id="partner">
    	<div class="wrapper">
        
        	<h2>Technologies</h2>
        
            <div class="partners">
              <div class="slide"><img src="../images/slide1.jpg"></div>
              <div class="slide"><img src="../images/slide2.jpg"></div>
              <div class="slide"><img src="../images/slide3.jpg"></div>
              <div class="slide"><img src="../images/slide4.jpg"></div>
              <div class="slide"><img src="../images/slide5.jpg"></div>
              <div class="slide"><img src="../images/slide6.jpg"></div>
              <div class="slide"><img src="../images/slide7.jpg"></div>
              <div class="slide"><img src="../images/slide8.jpg"></div>
              <div class="slide"><img src="../images/slide9.jpg"></div>
              <div class="slide"><img src="../images/slide10.jpg"></div>
            </div>
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
    

</body>
</html>
























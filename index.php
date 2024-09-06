<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>Codescriptify</title>
<meta name="description" content="Software & Graphic design - home" />
<meta name="keywords" content="codescriptify, Software, software, graphic design, design, graphic, web, web design, web site, website, websites, solutions, custom, custom solutions" />
<meta name="author" content="CODESCRIPTIFY" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

<link rel="icon" href="images/icon.png" type="image/x-icon">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

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
					<span style="margin-right:25px;"><i class="fa fa-lg fa-phone"></i>&nbsp;&nbsp;&nbsp;+43 699 19520435</span>
					<span style="margin-right:1px;"><i class="fa fa-lg fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;info@codescriptify.at</span>
                </div>
            	<div id="headerTopRight">
                	<a id="facebook" href="#"><i class="fa fa-lg fa-facebook-square"></i></a>
                	<a id="twitter" href="#"><i class="fa fa-lg fa-twitter-square"></i></a>
                	<a id="linkedin" href="#"><i class="fa fa-lg fa-linkedin-square"></i></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="index.php"><img src="images/de.png" alt="DE" title="DE"></a>
                    <a href="EN/index.php"><img src="images/uk.png" alt="UK" title="UK"></a>
                    <a href="HR/index.php"><img src="images/hr.png" alt="HR" title="HR"></a>
                </div>
            </div>
        </div>
        
        <div id="headerBottom">
        	<div class="wrapper">
            
            	<div id="logo">
                	<a href="index.php">
                    	<img src="images/logo.png" alt="logo">
                    </a>
                </div>
                
                <nav id="nav">
                	<ul>
                        <li><a href="index.php">home</a></li>
                    	<li><a href="about.php">über uns</a></li>
                    	<li><a href="products.php">service</a></li>
                    	<li><a href="news.php">news</a></li>
                    	<li><a href="contact.php">kontakt</a></li>
                    </ul>
                    <a href="#" id="respmenu" class="button"><i class="fa fa-lg fa-navicon"></i>&nbsp;&nbsp;&nbsp;&nbsp;Navigation</a>
                </nav>
            
            </div>
        </div>   
    
    </header><!-- kraj #header -->
    
    
    <article id="hero" class="negative">
    	<div class="wrapper">
        	<h1>Software &amp; Graphic design</h1>
            <p>Eine Weblösung, die Ihr Unternehmen voranbringt</p>
            <p>Wir sind hier mit der Mission, Ihre Wünsche wahr werden zu lassen – maßgeschneiderte Software die Ihnen ein Lächeln ins Gesicht zaubert.</p>
            <p><a href="news.php" class="button">Neue Produkte &raquo;</a></p>
        
        </div>    
    </article>
    
    
    <section id="products">
    	<div class="wrapper">
        	
            <header>
            	<h2>Unsere Produkte</h2>
                <p><em>Das Einzige, was Sie tun müssen, ist zu entscheiden, wo Sie Ihr Business verbessern möchten. Und selbst wenn Sie keine klare Vorstellung haben, machen Sie sich keine Sorgen – diese klugen Köpfe haben immer ein Ass im Ärmel, um Ihnen von der Ideenfindung bis zur Umsetzung und darüber hinaus zu helfen.</em></p>
                <p>Unsere geheime Zutat ist ein Gleichgewicht aus Funktionalität und Kreativität, das ein herausragendes digitales Erlebnis bietet. Entdecken Sie unser Angebot an innovativen Softwarelösungen, die speziell auf Ihre Geschäftsanforderungen zugeschnitten sind. Wir sind stolz darauf, innovative Produkte zu liefern, die die Effizienz steigern, das Benutzererlebnis verbessern und Ihr Unternehmen voranbringen.</p>
            </header>
            
			<div id="products-container">
				<article class="product">
					<span>
						<i class="fa fa-paper-plane"></i>
					</span>
					<h2>Software Development</h2>
					<p style="margin-bottom: 41px">Wir stellen Ihnen unser Talent für Software aller Art zur Verfügung. Sagen Sie uns einfach, was Sie brauchen.</p>
					<p><a href="products.php" class="button">mehr sehen &raquo;</a></p>
				</article>

				<article class="product">
					<span>
						<i class="fa fa-star"></i>
					</span>
					<h2>Web design</h2>
					<p style="margin-bottom: 78px">Wir bieten Websites und Grafikdesigns, die auf Ihre Vorlieben und persönlichen Wünsche zugeschnitten sind.</p>
					<p><a href="products.php" class="button">mehr sehen &raquo;</a></p>
				</article>

				<article class="product">
					<span>
						<i class="fa fa-cog"></i>
					</span>
					<h2>PIM (Pimcore)</h2>
					<p style="margin-bottom: 78px">Pimcore ist die bekannteste Produktinformationsmanagement-Plattform (PIM). Wir können diese für Sie unsetzen.</p>
					<p><a href="products.php" class="button">mehr sehen &raquo;</a></p>
				</article>

				<article class="product">
					<span>
						<i class="fa fa-umbrella"></i>
					</span>
					<h2>Custom solutions</h2>
					<p>Sie haben ein Projekt, dessen Umsetzung umfassende Unterstützung erfordert. Wir bieten Lösungen, die auf Ihre spezifischen Bedürfnisse zugeschnitten sind.</p>
					<p><a href="products.php" class="button">mehr sehen &raquo;</a></p>
				</article>
			</div>
            
        </div>    
    </section>
    
    
    
    <article id="about" class="negative">
    	<div class="wrapper">
        
        	<div class="back">
                <h2>Über uns und unser Team</h2>
                <p>Willkommen bei <strong>CODESCRIPTIFY</strong>, Ihrem vertrauenswürdigen Partner in der Welt der Informationstechnologie. Wir sind ein leidenschaftliches Team von IT-Experten, die sich der Bereitstellung innovativer Lösungen, dem Einsatz modernster Technologie und der Bereitstellung außergewöhnlicher Dienstleistungen für unsere Kunden widmen. Unser Team besteht aus hochqualifizierten und erfahrenen Fachleuten, die an der Spitze der sich ständig weiterentwickelnden IT-Landschaft stehen. Von Softwareentwicklung und Netzwerksicherheit bis hin zu Cloud-Lösungen und Datenanalysen verfügen wir über das Wissen und die Expertise, um ein breites Spektrum an IT-Anforderungen zu erfüllen.</p>
                <p><a href="about.php" class="button">Mehr sehen &raquo;</a></p>
       		</div>
       
        </div>
    </article>
    
    
    <section id="partner">
    	<div class="wrapper">
        
        	<h2>Technologien</h2>
        
            <div class="partners">
              <div class="slide"><img src="images/slide1.jpg"></div>
              <div class="slide"><img src="images/slide2.jpg"></div>
              <div class="slide"><img src="images/slide3.jpg"></div>
              <div class="slide"><img src="images/slide4.jpg"></div>
              <div class="slide"><img src="images/slide5.jpg"></div>
              <div class="slide"><img src="images/slide6.jpg"></div>
              <div class="slide"><img src="images/slide7.jpg"></div>
              <div class="slide"><img src="images/slide8.jpg"></div>
              <div class="slide"><img src="images/slide9.jpg"></div>
              <div class="slide"><img src="images/slide10.jpg"></div>
            </div>
        </div>
    </section>
    
    
    
    <footer id="footer" class="negative">
    	<div class="wrapper">
    		
            <div class="footerBlock">
            	<h3>Sie haben Fragen?</h3>
            	<p class="bold"><i class="fa fa-lg fa-envelope-o"></i> info@codescriptify.at</p>
            </div>
            <div class="footerBlock">
            	<h3>Lassen Sie es uns wissen!</h3>
            	<p class="bold">Antonie-Alt Gasse 16<br>1100 Wien</p>
            </div>
            
            <div class="footerBlockR">
            	<img src="images/logo.png">
            </div>
            
    	</div>
        <div class="wrapper" id="footerBottom">
        	<a href="#top" class="button">back to top</a>
        	<p>Copyright @ codescriptify // <a href="policy.php">privacy / cookie policy</a> </p>
        
        </div>
    </footer>
    

</body>
</html>
























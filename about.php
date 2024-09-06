<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<title>Codescriptify - Über uns</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>

<link rel="icon" href="images/icon.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,100italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="css/style.css">



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
                    <a href="about.php"><img src="images/de.png" alt="DE" title="DE"></a>
                    <a href="EN/about.php"><img src="images/uk.png" alt="UK" title="UK"></a>
                    <a href="HR/about.php"><img src="images/hr.png" alt="HR" title="HR"></a>
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
    
    
    
    <section id="central">
    	<div class="wrapper">
        
        	<main id="mainFull">
				<p><img src="images/about-banner.jpg" alt=""></p>

            	<h1>Wir sind CODESCRIPTIFY</h1>
                <p>Wir sind eine vielfältige Gruppe von Softwareentwicklern, Designern und kreativen Denkern, die lieben, was wir tun. Unser kollektives Fachwissen erstreckt sich über ein breites Spektrum an Technologien und Branchen und ermöglicht es uns, Projekte jeder Größenordnung und Komplexität anzugehen. Wir stellen uns eine Welt vor, die durch Technologie gestärkt wird und in der es für jedes Problem eine digitale Lösung gibt. Wir glauben, dass Software die treibende Kraft hinter dem Fortschritt ist und streben danach, an der Spitze dieser transformativen Reise zu stehen. Willkommen bei uns, wo Innovation in der Welt der Softwareentwicklung auf Exzellenz trifft. Wir sind ein Team aus leidenschaftlichen und engagierten Fachleuten, deren Ziel es ist, Ihre Ideen in modernste Softwarelösungen umzusetzen.</p>
                <h3>Unsere Vision</h3>
                <p>Bei Your CODESCRIPTIFY stellen wir uns eine Welt vor, die durch Technologie gestärkt wird und in der es für jedes Problem eine digitale Lösung gibt. Wir glauben, dass Software die treibende Kraft hinter dem Fortschritt ist und streben danach, an der Spitze dieser transformativen Reise zu stehen.</p>
                <h3>Was uns auszeichnet</h3>
                <p><strong>Innovation:</strong> Unser Ziel ist es, Grenzen zu überschreiten und neue Technologien zu nutzen, um Lösungen zu liefern, die die Erwartungen übertreffen.<br>
                   <strong>Kundenzentriert:</strong> Ihr Erfolg ist unser Erfolg. Wir arbeiten eng mit Ihnen zusammen, um Ihre individuellen Bedürfnisse zu verstehen und maßgeschneiderte Lösungen zu finden, die Ihren Zielen entsprechen.<br><strong>Qualitätsfokus:</strong> Wir sind von Qualität besessen. Jede Codezeile, die wir schreiben, jedes Designelement, das wir erstellen, wird sorgfältig ausgearbeitet, um Exzellenz zu gewährleisten.<br><strong>Pünktliche Lieferung:</strong> Wir wissen, wie wichtig Zeit in der heutigen schnelllebigen Welt ist. Wir sind stets bestrebt, pünktlich zu liefern.
                </p>
                <h3>Lasst uns zusammenarbeiten</h3>
                <p>Wir glauben, dass großartige Software durch Zusammenarbeit entsteht. Egal, ob Sie ein Startup sind, das eine Branche revolutionieren möchte, oder ein etabliertes Unternehmen, das seine Abläufe rationalisieren möchte, wir sind hier, um Sie auf Ihrem Weg zum Erfolg zu begleiten.</p>
            </main>
        
            
        </div>
    </section>
    <p><br></p>
    
    
    
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
























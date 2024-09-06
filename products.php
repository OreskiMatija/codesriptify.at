<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>Codescriptify - Service</title>
<meta name="description" content="Software & Graphic design - service" />
<meta name="keywords" content="Software, software, graphic design, design, graphic, web, web design, web site, website, websites, solutions, custom, custom solutions" />
<meta name="author" content="CODESCRIPTIFY" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

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
                    <a href="products.php"><img src="images/de.png" alt="DE" title="DE"></a>
                    <a href="EN/products.php"><img src="images/uk.png" alt="UK" title="UK"></a>
                    <a href="HR/products.php"><img src="images/hr.png" alt="HR" title="HR"></a>
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

            	<h1>Unsere Produkte</h1>
                <p>Wie bei allen Anfängen sind Ideen und Visionen nur im Kopf des Kunden und er sucht nach der Verwirklichung. Dann betreten wir die Bühne – Entwickler und Projektmanager helfen dem Kunden mit seinen Ideen und erschaffen eine Form von Geschichten. Hier erfahren Sie, was wir für Ihr Unternehmen oder Ihre Idee tun können. Durch die Zusammenarbeit mit den unterschiedlichsten Kunden aus unterschiedlichen Projekten haben wir gelernt, dass jeder von ihnen auf seine Art etwas Besonderes ist. Deshalb bieten wir Ihnen Produkte in 4 Filialen an. Es liegt an Ihnen, zu entscheiden, was Sie brauchen und was für Ihr Unternehmen am besten ist.<br><strong><em>Werfen Sie gerne einen Blick auf die unten aufgeführten Angebote</em></strong></p>
                
                
                <article class="product2">
                	<img style=" width: 340px; height: 240px;" src="images/software.jpg">
                	<div class="productInner">
                        <h2>Software Development</h2>
                        <p class="bold">Wir stellen Ihnen unser Talent für Software aller Art zur Verfügung. Sagen Sie uns einfach, was Sie brauchen.</p>
                        <p>Sobald wir die Ziele eines Projekts definiert haben, beginnen wir mit der Arbeit an der Softwarearchitektur, die durch Projektanforderungen, Produktionsumgebung und Zukunftsvision für das Projekt bestimmt wird. Nachdem wir alle Informationen gesammelt haben, teilen wir den Arbeitsaufwand in Module/Einheiten auf und hier beginnt die eigentliche Codierung. Die Umsetzung erfolgt phasenweise auf Basis von Softwareentwicklungsmethoden. Basierend auf den Anforderungen der Kunden. Wenn die Codierung abgeschlossen ist, wird sie anhand der Anforderungen getestet, um sicherzustellen, dass das Projekt tatsächlich ein Problem löst, das zu Beginn eines Zyklus angesprochen wurde. In dieser vierten Phase wird eine andere Art von Funktionstests durchgeführt: Unit-Tests, Integrationstests, System- und Akzeptanztests. Abhängig von der Vereinbarung mit Ihnen kann die Wartung langfristig erfolgen. Nach erfolgreicher Testphase wird das Endprodukt an den Kunden geliefert. Kunden führen Betatests durch und wenn Änderungen erforderlich sind oder Fehler entdeckt werden, ist unser Engineering-Team der nächste Ansprechpartner. Sobald alles behoben ist, ist es Zeit für die endgültige Bereitstellung.</p>
                	</div>
                </article>
                <article class="product2">
                	<img style=" width: 340px; height: 240px;" src="images/web.jpg">
                	<div class="productInner">
                        <h2>Web design and Websites</h2>
                        <p class="bold">Wir bieten Websites und Grafikdesigns, die auf Ihre Vorlieben und persönlichen Wünsche zugeschnitten sind.</p>
                        <p><strong><em>Sie benötigen eine Website für Ihr Unternehmen? Kein Problem!</em></strong> Wir stellen Ihnen die modernsten und kompatibelsten Websites zur Verfügung, die nach Ihren Wünschen erstellt werden. Unsere Richtlinie besteht darin, Plattformen nicht zum Erstellen von Websites zu nutzen. Wir schreiben unseren eigenen Code, um die Website stabiler und kontrollierbarer zu machen. Darüber hinaus ist jede Website responsive, an alle Geräte (PC, Tablet, Mobiltelefon) angepasst und wir kümmern uns um das Hosting und die Domain Ihrer Website, sowie die komplette Wartung, sodass Sie sich um nichts kümmern müssen.</p>
                	</div>
                </article>
                
                <article class="product2">
                	<img style=" width: 340px; height: 240px;" src="images/pim.jpg">
                	<div class="productInner">
                        <h2>PIM (Pimcore)</h2>
                        <p class="bold">Pimcore ist die bekannteste Produktinformationsmanagement-Plattform (PIM). Wir können es für Sie tun.</p>
                        <p>Unternehmen sollten ein PIM-System nutzen, wenn sie über alle Vertriebskanäle hinweg konsistente und aktuelle Produktinformationen sicherstellen und anzeigen möchten. Das PIM-System ermöglicht es Unternehmen, Produktinformationen an einem zentralen Ort zu sammeln, zu speichern und zu verwalten und stellt sicher, dass diese Informationen in Echtzeit aktualisiert werden können. Durch den Einsatz eines PIM-Systems kann ein Unternehmen sicherstellen, dass alle Produktinformationen, einschließlich Beschreibungen, Bilder, Spezifikationen und Preise, korrekt und aktuell sind. Ein PIM-System ermöglicht es Unternehmen, ihre Produkte effektiver zu vermarkten, indem es ihnen die Möglichkeit gibt, neue Produkte schnell auf den Markt zu bringen und diese in verschiedenen Sprachen und Währungen zu präsentieren. Zusammenfassend lässt sich sagen, dass ein PIM-System Unternehmen eine effiziente Möglichkeit bietet, Produktinformationen zu organisieren und zu verwalten, was zu einer besseren Kundenzufriedenheit und höheren Umsätzen führen kann.</p>
                	</div>
                </article>
                <article class="product2">
                	<img style=" width: 340px; height: 240px;" src="images/custom.jpg">
                	<div class="productInner">
                        <h2>Custom solutions</h2>
                        <p class="bold">Sie haben ein Projekt, dessen Umsetzung umfassende Unterstützung erfordert. Wir bieten Lösungen, die auf Ihre spezifischen Bedürfnisse zugeschnitten sind.</p>
                        <p><strong><em>Haben Sie die Software bereits? Das ist großartig! Müssen Sie die Funktionalität Ihrer Software verbessern oder möchten Sie einige neue Funktionen hinzufügen? Das ist noch besser!</em></strong> Was wir tun? Unser Hauptziel besteht darin, das bestehende System zu untersuchen, Probleme zu identifizieren und eine Lösung zu finden sowie diese zu entwerfen und in bestehende Anlagen zu implementieren. Nachdem wir das System analysiert und Schwachstellen gefunden haben, erstellen wir neue Funktionen oder beheben ein bestehendes Systemproblem. Unser Ziel ist es, eine passende Lösung zu finden, die für Sie nützlich ist und Ihr Unternehmen und Ihr System verbessert.</p>
                	</div>
                </article>
                
            </main>
        
            
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
























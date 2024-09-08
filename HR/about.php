<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>Codescriptify - o nama</title>
<meta name="description" content="Software & Graphic design - o nama" />
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
					<span style="margin-right:25px;"><i class="fa fa-lg fa-phone"></i>&nbsp;&nbsp;&nbsp;+385 95 8552378</span>
					<span style="margin-right:1px;"><i class="fa fa-lg fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;info@codescriptify.at</span>
                </div>
            	<div id="headerTopRight">
                	<a id="facebook" href="#"><i class="fa fa-lg fa-facebook-square"></i></a>
                	<a id="twitter" href="#"><i class="fa fa-lg fa-twitter-square"></i></a>
                	<a id="linkedin" href="#"><i class="fa fa-lg fa-linkedin-square"></i></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../about.php"><img src="../images/de.png" alt="DE" title="DE"></a>
                    <a href="../EN/about.php"><img src="../images/uk.png" alt="UK" title="UK"></a>
                    <a href="about.php"><img src="../images/hr.png" alt="HR" title="HR"></a>
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
                        <li><a href="index.php">naslovnica</a></li>
                    	<li><a href="about.php">o nama</a></li>
                    	<li><a href="products.php">proizvodi</a></li>
                    	<li><a href="news.php">novo</a></li>
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
				<p><img src="../images/about-banner.jpg" alt=""></p>

            	<h1>Mi smo CODESCRIPTIFY</h1>
                <p>Mi smo raznolika skupina softverskih inženjera, dizajnera i kreativnih mislilaca koji vole ono što radimo. Naša kolektivna stručnost obuhvaća širok raspon tehnologija i industrija, što nam omogućuje da se uhvatimo u koštac s projektima bilo koje razine ili složenosti. Zamišljamo svijet osnažen tehnologijom, u kojem svaki problem ima digitalno rješenje. Vjerujemo da je softver pokretačka snaga napretka i nastojimo biti na čelu ovog transformativnog putovanja. Dobrodošli kod nas, gdje se inovacija susreće s izvrsnošću u svijetu razvoja softvera. Mi smo tim strastvenih i predanih profesionalaca vođenih misijom pretvaranja vaših ideja u vrhunska softverska rješenja.</p>
                <h3>Naša vizija</h3>
                <p>U Vašem CODESCRIPTIFY zamišljamo svijet osnažen tehnologijom, u kojem svaki problem ima digitalno rješenje. Vjerujemo da je softver pokretačka snaga napretka i nastojimo biti na čelu ovog transformativnog putovanja.</p>
                <h3>po čemu se izdvajamo</h3>
                <p><strong>Inovacija:</strong> Uspjevamo u pomicanju granica i prihvaćanju novih tehnologija kako bismo isporučili rješenja koja nadilaze očekivanja.<br>
                   <strong>Usredotočenost na klijenta:</strong> Vaš uspjeh je i naš uspjeh. Blisko surađujemo s vama kako bismo razumjeli vaše jedinstvene potrebe i prilagodili rješenja koja su u skladu s vašim ciljevima.<br><strong>Fokus na kvalitetu:</strong> Opsjednuti smo kvalitetom. Svaki red coda koji pišemo, svaki element dizajna koji stvaramo, pomno je izrađen kako bi se osigurala izvrsnost.<br><strong>Najbrža dostava:</strong> Shvaćamo važnost vremena u današnjem brzom svijetu. Predani smo isporuci na vrijeme, svaki put.
                </p>
                <h3>Hajmo surađivati</h3>
                <p>Vjerujemo da se izvrstan softver rađa iz suradnje. Bilo da ste startup koji želi poremetiti industriju ili etablirano poduzeće koje želi pojednostaviti poslovanje, ovdje smo da vam budemo partner na vašem putu do uspjeha.</p>
            </main>
        
            
        </div>
    </section>
    <p><br></p>
    
    
    <footer id="footer" class="negative">
    	<div class="wrapper">
    		
            <div class="footerBlock">
            	<h3>Imate pitanja?</h3>
            	<p class="bold"><i class="fa fa-lg fa-envelope-o"></i> info@codescriptify.at</p>
            </div>
            <div class="footerBlock">
            	<h3>Slobodno nam se javite!</h3>
            	<p class="bold">Antonie-Alt Gasse 16<br>1100 Wien</p>
            </div>
            
            <div class="footerBlockR">
            	<img src="../images/logo.png">
            </div>
            
    	</div>
        <div class="wrapper" id="footerBottom">
        	<a href="#top" class="button">nazad na vrh</a>
        	<p>Copyright @ codescriptify // <a href="#">privacy</a> / <a href="#">cookie policy</a> </p>
        
        </div>
    </footer>
    

</body>
</html>
























<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>Codescriptify - novosti</title>
<meta name="description" content="Software & Graphic design - novosti" />
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
                    <a href="../news.php"><img src="../images/de.png" alt="DE" title="DE"></a>
                    <a href="../EN/news.php"><img src="../images/uk.png" alt="UK" title="UK"></a>
                    <a href="news.php"><img src="../images/hr.png" alt="HR" title="HR"></a>
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

            	<h1>Najnovije vijesti</h1>
                <p>Ako želite znati što se događa i što ima novog, došli ste na pravo mjesto! Predstavljamo vam nove projekte, događaje, informacije i još mnogo toga iz našeg asortimana internet agencije, premda su glavni fokus novi proizvodi koji vas drže upoznatima s našim novim kreativnim idejama koje smo razvili za vas!</p>
           		<p>&nbsp;</p>
           
           		<article class="article">
                	
                	<a href="wedding-news.php" style="margin-left:105px;" class="articleImg"><img src="../images/wedding.jpg" alt="wedding img"></a>
                    
                    <header>
                    	<h2><a href="#">Digitalne pozivnice za vjenčanje</a></h2>
                    </header>
                    
                    <p>Planirate vjenčanje? Ali nemate vremena birati klasične dizajne u papirnatom obliku? Nemate vremena poslati ili posjetiti svoje prijatelje da isporučite pozivnicu/e? I što je najvažnije, ne želite potrošiti puno novca za jednokratnu svrhu, a uz to želite imati cijelu organizaciju vjenčanja na jednom mjestu (app) bez zapisivanje na papir i manualnog kalkuliranja gostiju, troškova itd...? <strong>Ako je tako. Onda ste na pravom mjestu!</strong></p>
                    <h6>[ Dostupni jezici: Njemački, Engleski, Srpsko-Hrvatski ]</h6>
                	<p><a href="wedding-news.php" class="button">Istražite više &raquo;</a></p>
                </article>
           
            </main>
        
            
        </div>
    </section>
    
    
    
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
























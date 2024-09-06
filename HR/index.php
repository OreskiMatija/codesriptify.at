<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>Codescriptify - naslovnica</title>
<meta name="description" content="Software & Graphic design - naslovnica" />
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
					<span style="margin-right:25px;"><i class="fa fa-lg fa-phone"></i>&nbsp;&nbsp;&nbsp;+43 699 19520435</span>
					<span style="margin-right:1px;"><i class="fa fa-lg fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;info@codescriptify.at</span>
                </div>
            	<div id="headerTopRight">
                	<a id="facebook" href="#"><i class="fa fa-lg fa-facebook-square"></i></a>
                	<a id="twitter" href="#"><i class="fa fa-lg fa-twitter-square"></i></a>
                	<a id="linkedin" href="#"><i class="fa fa-lg fa-linkedin-square"></i></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../index.php"><img src="../images/de.png" alt="DE" title="DE"></a>
                    <a href="../EN/index.php"><img src="../images/uk.png" alt="UK" title="UK"></a>
                    <a href="index.php"><img src="../images/hr.png" alt="HR" title="HR"></a>
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
                    	<li><a href="about.php">O nama</a></li>
                    	<li><a href="products.php">Proizvodi</a></li>
                    	<li><a href="news.php">novo</a></li>
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
            <p>Web rješenje koje pokreće vaše poslovanje naprijed</p>
            <p>Ovdje smo s misijom ostvariti vaše želje - kreirati softver po mjeri s osmijehom na licu.</p>
            <p><a href="news.php" class="button">Novi proizvodi &raquo;</a></p>
        
        </div>    
    </article>
    
    
    <section id="products">
    	<div class="wrapper">
        	
            <header>
            	<h2>Naši izvrsni proizvodi</h2>
                <p>Jedina stvar koju trebate učiniti je odlučiti gdje želite poboljšati svoje poslovanje. Čak i ako nemate jasnu ideju, bez brige – ovi štreberski umovi uvijek imaju asa u rukavu da vas podrže, od ideje do realizacije i više.</p>
                <p>Naš tajni sastojak je ravnoteža funkcionalnosti i kreativnosti, pružajući izvanredno digitalno iskustvo. Istražite naš asortiman inovativnih softverskih rješenja dizajniranih da zadovolje vaše poslovne potrebe. Ponosimo se isporukom vrhunskih proizvoda koji potiču učinkovitost, poboljšavaju korisnička iskustva i pokreću vaše poslovanje naprijed.</p>
            </header>
            
			<div id="products-container">
				<article class="product">
					<span>
						<i class="fa fa-paper-plane"></i>
					</span>
					<h2>Software Development</h2>
					<p>Pružamo Vam naš talent za sve vrste softvera. Samo nam recite što Vam treba.</p><br><br>
					<p><a href="products.php" class="button">Više o tome &raquo;</a></p>
				</article>

				<article class="product">
					<span>
						<i class="fa fa-star"></i>
					</span>
					<h2>Web design</h2>
					<p>Izrađujemo web stranice i grafički dizajn prilagođen Vašim preferencijama i Vašim osobnim željama.</p><br><br><br>
					<p><a href="products.php" class="button">više o tome &raquo;</a></p>
				</article>

				<article class="product">
					<span>
						<i class="fa fa-cog"></i>
					</span>
					<h2>PIM (Pimcore)</h2>
					<p>Pimcore je najpoznatija platforma za upravljanje informacijama o proizvodu (PIM). Mi to možemo učiniti za vas.</p>
					<p><a href="products.php" class="button">više o tome &raquo;</a></p>
				</article>

				<article class="product">
					<span>
						<i class="fa fa-umbrella"></i>
					</span>
					<h2>Custom solutions</h2>
					<p>Imate projekt koji treba punu podršku da bi se izvršio i dovršio. Nudimo rješenja prilagođena vašim specifičnim potrebama.</p>
					<p><a href="products.php" class="button">Više o tome &raquo;</a></p>
				</article>
			</div>
            
        </div>    
    </section>
    
    
    
    <article id="about" class="negative">
    	<div class="wrapper">
        
        	<div class="back">
                <h2>O nama i našem timu</h2>
                <p>Dobrodošli u CODESCRIPTIFY, vašeg pouzdanog partnera u svijetu informacijske tehnologije. Mi smo strastveni tim IT stručnjaka posvećen isporuci inovativnih rješenja, iskorištavanju vrhunske tehnologije i pružanju iznimne usluge našim klijentima. Naš tim sastoji se od visoko kvalificiranih i iskusnih stručnjaka koji su na čelu IT krajolika koji se stalno razvija. Od razvoja softvera i mrežne sigurnosti do rješenja u oblaku i analitike podataka, imamo znanje i stručnost za rješavanje širokog spektra IT potreba.</p>
                <p><a href="about.php" class="button">više o nama &raquo;</a></p>
       		</div>
       
        </div>
    </article>
    
    
    <section id="partner">
    	<div class="wrapper">
        
        	<h2>Tehnologije</h2>
        
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
            </div>
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
























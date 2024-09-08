<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>Codescriptify - proizvodi</title>
<meta name="description" content="Software & Graphic design - proizvodi" />
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
                    <a href="../products.php"><img src="../images/de.png" alt="DE" title="DE"></a>
                    <a href="../EN/products.php"><img src="../images/uk.png" alt="UK" title="UK"></a>
                    <a href="products.php"><img src="../images/hr.png" alt="HR" title="HR"></a>
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

            	<h1>Naši proizvodi</h1>
                <p>Kao i svi počeci - ideje i vizije su samo u glavi klijenta i traže realizaciju. Zatim na pozornicu stupamo mi - programeri, voditelji projekata pomažu klijentu sa svojim idejama i stvaraju formu cjeloukupne priče. Evo što možemo učiniti za vaš posao ili ideju. Radeći sa svim vrstama klijenata iz različitih projekata, naučili smo da je svaki od njih poseban na svoj način. Stoga Vam nudimo proizvode razgranate u 4 grane. Na vama je da odaberete što vam je potrebno i što je najbolje za vaš posao.<br><strong><em>Slobodno istražite ponudu u nastavku</em></strong></p>
                
                
                <article class="product2">
                	<img style=" width: 340px; height: 240px;" src="../images/software.jpg">
                	<div class="productInner">
                        <h2>Software Development</h2>
                        <p class="bold">Pružamo Vam naš talent za sve vrste softvera. Samo nam recite što Vam treba.</p>
                        <p>Nakon što definiramo ciljeve projekta, počinjemo raditi na arhitekturi softvera, koja je određena zahtjevima projekta, proizvodnim okruženjem i budućim vizijama projekta. Nakon što prikupimo sve informacije, radno opterećenje dijelimo na module/jedinice i tu počinje stvarno kodiranje. Implementacija se odvija u fazama koje se oslanjaju na metodologije razvoja softvera. Na temelju zahtjeva klijenata. Kada je kodiranje gotovo, testira se u odnosu na zahtjeve kako bi se osiguralo da projekt stvarno rješava problem koji je riješen na početku ciklusa. Tijekom ove četvrte faze provodi se različita vrsta funkcionalnog testiranja - testiranje jedinica, testiranje integracije, testiranje sustava i testiranje prihvaćanja. Ovisno o dogovoru s Vama, održavanje može biti dugoročno. Nakon uspješne faze testiranja, finalni proizvod se isporučuje kupcu. Klijenti provode beta testiranje i ako su potrebne bilo kakve promjene ili se uoče greške, sljedeća stanica je naš inženjerski tim. Nakon što je sve popravljeno, vrijeme je za konačnu implementaciju.</p>
                	</div>
                </article>
                <article class="product2">
                	<img style=" width: 340px; height: 240px;" src="../images/web.jpg">
                	<div class="productInner">
                        <h2>Web design and Websites</h2>
                        <p class="bold">Izrađujemo web stranice i grafički dizajn prilagođen Vašim preferencijama i Vašim osobnim željama.</p>
                        <p><strong><em>Trebate web stranicu za svoju tvrtku? Nema problema!</em></strong> Pružamo Vam najmodernije i najkompatibilnije web stranice izrađene prema Vašim željama. Naša politika je da ne koristimo platforme za izradu web stranica, mi pišemo vlastiti kod kako bi web stranica bila stabilnija i s većom kontrolom. Osim toga, svaka web stranica je responzivna, prilagođena svim uređajima (PC, tablet, mobitel), a mi osiguravamo i brinemo o hostingu i domeni vaše web stranice, naravno i kompletnom održavanju, tako da ne morate brinuti ni o čemu.</p>
                	</div>
                </article>
                
                <article class="product2">
                	<img style=" width: 340px; height: 240px;" src="../images/pim.jpg">
                	<div class="productInner">
                        <h2>PIM (Pimcore)</h2>
                        <p class="bold">Pimcore je najpoznatija platforma za upravljanje informacijama o proizvodu (PIM). Mi to možemo učiniti za vas.</p>
                        <p>Tvrtke bi trebale koristiti PIM sustav ako žele osigurati i prikazati dosljedne i ažurne informacije o proizvodu u svim prodajnim kanalima. Sustav PIM omogućuje tvrtkama prikupljanje, pohranjivanje i upravljanje informacijama o proizvodima na središnjoj lokaciji te osigurava da se te informacije mogu ažurirati u stvarnom vremenu. Korištenjem PIM sustava, tvrtka može osigurati da su sve informacije o proizvodu, uključujući opise, slike, specifikacije i cijene, točne i ažurne. PIM sustav omogućuje tvrtkama da učinkovitije reklamiraju svoje proizvode dajući im mogućnost brzog lansiranja novih proizvoda i predstavljanja na različitim jezicima i valutama. Ukratko, PIM sustav nudi tvrtkama učinkovit način organiziranja i upravljanja informacijama o proizvodu, što može dovesti do boljeg zadovoljstva kupaca i veće prodaje.</p>
                	</div>
                </article>
                <article class="product2">
                	<img style=" width: 340px; height: 240px;" src="../images/custom.jpg">
                	<div class="productInner">
                        <h2>Custom solutions</h2>
                        <p class="bold">Imate projekt koji treba punu podršku da bi se izvršio i dovršio. Nudimo rješenja prilagođena vašim specifičnim potrebama.</p>
                        <p><strong><em>Već imate softver? To je odlično! Trebate li poboljšati funkcionalnost svog softvera ili želite dodati neke nove značajke? To je još bolje!</em></strong> Što radimo? Naš glavni cilj je ispitati postojeći sustav, identificirati probleme i pronaći rješenje te projektirati i implementirati isti na postojeću opremu. Nakon analize sustava i pronalaska bolnih točaka stvaramo nove značajke ili rješavamo postojeći problem u sustavu. Naš cilj je pronaći odgovarajuće rješenje koje će Vam biti korisno i koje će unaprijediti Vaše poslovanje i Vaš sustav.</p>
                	</div>
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
























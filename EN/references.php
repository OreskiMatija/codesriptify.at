<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>NOVA</title>

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
					<span><i class="fa fa-lg fa-phone"></i>&nbsp;&nbsp;&nbsp;011.333.00.00</span>
					<span><i class="fa fa-lg fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;info@primer.rs</span>
                </div>
            	<div id="headerTopRight">
                	<a id="facebook" href="#"><i class="fa fa-lg fa-facebook-square"></i></a>
                	<a id="twitter" href="#"><i class="fa fa-lg fa-twitter-square"></i></a>
                	<a id="linkedin" href="#"><i class="fa fa-lg fa-linkedin-square"></i></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../references.php"><img src="../images/de.png" alt="DE"></a>
                    <a href="references.php"><img src="../images/uk.png" alt="UK"></a>
                    <a href="../HR/references.php"><img src="../images/hr.png" alt="HR"></a>
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
                    	<li><a href="references.php">references</a></li>
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

            	<h1>Our references</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, labore, eveniet, beatae inventore neque porro quia ab aperiam distinctio ratione ipsum ipsam eaque corporis adipisci. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, magnam, laboriosam vero architecto rerum cupiditate dolor esse commodi tempore sequi id soluta! Amet eum facilis nulla quam doloremque sit cumque aspernatur ab perferendis voluptate. Ratione quod enim fuga quasi expedita!</p>
           		<p>&nbsp;</p>
           
           		<div id="references-container">
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
					<a href="#" target="_blank" class="referenceLink"><img src="http://placehold.it/340x240&text=Partner"></a>
           		</div>
					
            </main>
        
            
        </div>
    </section>
    
    
    
    <footer id="footer" class="negative">
    	<div class="wrapper">
    		
            <div class="footerBlock">
            	<h3>You have questions?</h3>
            	<p class="bold"><i class="fa fa-lg fa-envelope-o"></i> info@primer.rs</p>
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
























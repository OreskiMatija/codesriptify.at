<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>Codescriptify - products</title>
<meta name="description" content="Software & Graphic design - products" />
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
                    <a href="../products.php"><img src="../images/de.png" alt="DE"></a>
                    <a href="products.php"><img src="../images/uk.png" alt="UK"></a>
                    <a href="../HR/products.php"><img src="../images/hr.png" alt="HR"></a>
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

            	<h1>Our products</h1>
                <p>As all the beginnings - ideas and visions are just in the client's mind and they look for realization. Then, we take the stage - developers, project managers help the client with their ideas and make a form of stories. Here’s what we can do for your business or idea. Working with all kinds of clients from different projects, we have learned that each of them is special in its own way. Therefore, we offer you products branched into 4 branches. It is up to you to choose what you need and what is best for your business.<br><strong><em>Please feel free to explore the offerings below</em></strong></p>
                
                
                <article class="product2">
                	<img style=" width: 340px; height: 240px;" src="../images/software.jpg">
                	<div class="productInner">
                        <h2>Software Development</h2>
                        <p class="bold">We provide you with our talent for you all kinds of software. Just tell us what you need.</p>
                        <p>Once we define a project's goals, we start working on software architecture, which is determined by project requirements, production environment, and future visions for the project. After we collect all the information, we divide the workload into modules/units and this is where the actual coding starts. Implementation is done in stages that rely on methodologies of software development. Based on clients' requirements. When the coding is done, it gets tested against the requirements to make sure that the project is actually resolving a problem addressed at the beginning of a cycle. During this fourth phase, a different type of functional testing is done - unit testing, integration testing, system, and acceptance testing. Depending on the agreement with you, maintenance can be long-term. After a successful testing phase, the final product is delivered to the customer. Clients perform beta testing and if any changes are needed or bugs are realized, the next stop is our engineering team. Once everything is fixed, it’s time for the final deployment.</p>
                	</div>
                </article>
                <article class="product2">
                	<img style=" width: 340px; height: 240px;" src="../images/web.jpg">
                	<div class="productInner">
                        <h2>Web design and Websites</h2>
                        <p class="bold">We provide websites and Graphic designs tailored to your preferences and your personal wishes.</p>
                        <p><strong><em>Do you need a website for your company? No problem!</em></strong> We provide you with the most modern and compatible websites created according to your wishes. Our policy is not to use platforms to create websites, we write our own code to make the website more stable and with greater control. Besides, each website is responsive, adapted to all devices (PC, tablet, cell phone) and we provide and take care of your website's hosting and domain, of course also complete maintenance, so you don't have to worry about anything.</p>
                	</div>
                </article>
                
                <article class="product2">
                	<img style=" width: 340px; height: 240px;" src="../images/pim.jpg">
                	<div class="productInner">
                        <h2>PIM (Pimcore)</h2>
                        <p class="bold">Pimcore is the most famous Product Information Management (PIM) platform. We can do it for you.</p>
                        <p>Companies should use a PIM system if they want to ensure and display consistent and up-to-date product information across all sales channels. The PIM system allows companies to collect, store and manage product information in a central location and ensures that this information can be updated in real time. By using a PIM system, a business can ensure that all product information, including descriptions, images, specifications and prices, is accurate and up-to-date. A PIM system allows companies to market their products more effectively by giving them the ability to quickly launch new products and present them in different languages and currencies. In summary, a PIM system offers companies an efficient way to organize and manage product information, which can lead to better customer satisfaction and higher sales.</p>
                	</div>
                </article>
                <article class="product2">
                	<img style=" width: 340px; height: 240px;" src="../images/custom.jpg">
                	<div class="productInner">
                        <h2>Custom solutions</h2>
                        <p class="bold">You have a project that needs full support to execute. We offer a solutions tailored to your specific needs.</p>
                        <p><strong><em>You already have the software? that's great! Do you need to improve the functionality of your software or want to add some new features? That's even better!</em></strong> What we do? Our main goal is to examine the existing system, identify problems and find a solution, as well as design and implement it to existing equipment. After analyzing the system and finding pain points we create new features or fix an existing system problem. Our goal is to find a suitable solution that will be useful to you and that will improve your business and your system.</p>
                	</div>
                </article>
                
            </main>
        
            
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
























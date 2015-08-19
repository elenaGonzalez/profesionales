<?php  

     require_once "profesionalModel.php";
     require_once("sesion.php");
 
     $sesion = new sesion();
     $usuario = $sesion->get("usuario");


    $profesionalModel = new profesionalModel();

    $profesionales = $profesionalModel->get_profesionales();

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>..:: Profesionales  ::.. - Home</title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/responsiveslides.css" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='./images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
	
</head>
<body>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="#"><img src="./images/logo.png"/></a></div>
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onFocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onBlur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
<div class="menu">
			<ul>
				<li class="current"><a href="index.php">Home</a></li>
				<li class="first"><a href="profesionales.php">Profesionales</a></li>
				<li><a href="servicios.php">Servicios</a></li>
				<li><a href="qsomos.php">Quienes Somos</a></li>
				<li class="last"><a href="contacto.php">Contacto</a></li>
			</ul>
		</div>
		
		
		<div class="minimenu"><div>MENU</div>
			<select onChange="location=this.value">
				<option></option>
				<option value="index.php">Home</option>
				<option value="profesionales.php">Profesionales</option>
				<option value="servicios.php">Servicios</option>
				<option value="qsomos.php">Quienes Somos</option>
				<option value="contacto.php">Contacto</option>
			</select>
		</div>
	<div class="share">
			<ul>
				<li><a href="#"><img src="images/rss-icon.png" title="RSS"/></a></li>
				<li><a href="#"><img src="images/twitter-icon.png" title="Twitter"/></a></li>
				<li><a href="#"><img src="images/facebook-icon.png" title="Facebook"/></a></li>
				<li><a href="#"><img src="images/google-plus-icon.png" title="Google Plus"/></a></li>
				<li><a href="#"><img src="images/pinterest-icon.png" title="Pinterest"/></a></li>
				<li><a href="#"><img src="images/linkedin-icon.png" title="Linkedin"/></a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					<li><img src="images/slider1.jpg"/></li>
					<li><img src="images/slider2.jpg"/></li>
					<li><img src="images/slider3.jpg"/></li>
					<li><img src="images/slider4.jpg"/></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			<div class="col-full">
				<div class="wrap-col">
					<h2>Bienvenido a Profesionales  !</h2>
					<p>El sitio mas completo para publicar, encontrar servicio y lograr lo que deseas son perder tiempo y en cualquier momento. </p>
					<p>

				</div>
			</div>
		</div>
             
		<div class="row block02">
			<div class="col-1-3">
				<div class="wrap-col box1">
					<img src="images/icon1.png" />
					<h2>Usuario premiun </h2>
					<p>Descripcion.</p>
					<a href="#">[ More ]</a>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box2">
					<img src="images/icon2.png" />
					<h2>Usuario vip </h2>
					<p>Descripcion.</p>
					<a href="#">[ More ]</a>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box3">
					<img src="images/icon3.png" />
					<h2>&nbsp;</h2>
					<p>Descripcion.</p>
					<a href="#">[ More ]</a>
				</div>
			</div>
		</div>
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<h2>Quienes Somos </h2>
					<img src="images/about.jpg" />
					<p>Somos la puerta al mundo del avance, el crecimiento, la oportunidad y el desarrollo...Somos realizadores de sueños.[...]</p>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h2>Servicios</h2>
					<ul>
						<li><a href="#">Publica tu servicio.</a></li>
						<li><a href="#">Promociona tu producto.</a></li>
						<li><a href="#">Haz tu proyecto realidad.</a></li>
						<li><a href="#">Logra que el mundo te conozca.</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row block04">
			<div class="col-full">
				<div class="wrap-col">
					<h2>Empresas amigas. </h2>
					<div class="partners">
						<a><img src="images/partner01.jpg" /></a>
						<a><img src="images/partner02.jpg" /></a>
						<a><img src="images/partner03.jpg" /></a>
						<a><img src="images/partner04.jpg" /></a>
						<a><img src="images/partner05.jpg" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	<div class="wrap-footer">
		<div class="copyright">
		<p>Copyright © 2015 - <a href="http://www.eje.com/" target="_blank">Eje</a></p>
		</div>
	</div>
</footer>

</body></html>
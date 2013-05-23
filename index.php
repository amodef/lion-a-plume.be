<?php
require_once("inc/config.php");
include_once("inc/i18n.php");
?>

<!doctype html>
<html lang="<?php echo _("en"); ?>">
<head>
	<meta charset="utf-8">
	<title><?php echo _("Lion à Plume's brewery") . ' - ' . $locale; ?></title>

	<link rel="stylesheet" href="<?php echo BASE_URL ; ?>styles/normalize.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ; ?>styles/fonts.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ; ?>styles/style.css">
	
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="<?php echo BASE_URL ; ?>scripts/jquery.parallax-1.1.3.js"></script>
	<script src="<?php echo BASE_URL ; ?>scripts/jquery.localscroll-1.2.7-min.js"></script>
	<script src="<?php echo BASE_URL ; ?>scripts/jquery.scrollTo-1.4.2-min.js"></script>
	<script src="<?php echo BASE_URL ; ?>scripts/jquery.cycle-1.3.2.js"></script>
	<script src="<?php echo BASE_URL ; ?>scripts/jquery.projectCode.js"></script>
</head>

<body>
	
	<!-- menu de navigation -->
	<header>
		<nav id="top_menu" class="top_menu">
		<ul id="nav">
			<li class="logo">
				<a href="#intro"><img src="<?php echo BASE_URL ; ?>images/nav_logo.png" alt="Lion à Plume" title="Lion à Plume"></a>
			</li> 
			<li class="t1"><a href="#slides" title="<?php echo _("Our beers"); ?>"><?php echo _("Our beers"); ?></a></li>
			<li class="t2"><a href="#brewe" title="<?php echo _("The brewery"); ?>"><?php echo _("The brewery"); ?></a></li>
			<!--<li class="t3"><a href="#resel_bg" title="Resellers">Resellers</a></li>-->
			<li class="t3"><a href="#conta_bg" title="<?php echo _("Contact"); ?>"><?php echo _("Contact"); ?></a></li>
		</ul>
		</nav>
	</header>

	<!-- introduction -->
	<div id="intro" class="intro bg">
	<div class="container">
		<section class="intro_float">
			<header>
				<h1><?php echo _("Welcome to the<br>Lion à Plume's<br>website"); ?></h1>
			</header>
			<!-- menu direct bières -->
			<nav class="intro_beers">
				<header>
					<h1><?php echo _("Our beers"); ?></h1>
				</header>
				<ul>
					<li>
						<a href="#" data-link="0" title="Carioca">
							Carioca<br>
							<span><?php echo _("The white beer"); ?></span>
						</a>
					</li>
					<li>
						<a href="#" data-link="1" title="Métisse">
							Métisse<br>
							<span><?php echo _("The season beer"); ?></span>
						</a>
					</li>
					<li>
						<a href="#" data-link="2" title="Postiche">
							Postiche<br>
							<span><?php echo _("Russian Imperial Stout"); ?></span>
						</a>								
					</li>
				</ul>
			</nav>
			<!-- scroll évènement -->
			<section class="intro_event">
				<header>
					<h1><?php echo _("Events"); ?></h1>
				</header>
				<div class="scroll">
					<article>
						<header>
							<h1><?php echo _("New website!"); ?></h1>
							<p>1-6-13</p>						
						</header>
						<p><?php echo _("Here it is! Our long awaited new website is finally online. We really hope that you'll appreciate it has we do!"); ?></p>
					</article>
				</div>
			</section>
		</section>
		<!-- illustration verre -->
		<section class="intro_glass">
			
		<!--img src="images/intro_glass.png" alt="verre de bière" name="verre"-->
		</section>
	</div>
	</div>
	
	<!-- transition 1 -->
	<div id="tr1" class="transition">
		<div class="story">
	        <h1><?php echo _("Discover"); ?></h1>
	      	<h2><?php echo _("The three original beers"); ?></h2>
	    </div>
	</div>
	
	<!-- les bières -->
	<div id="slides" class="slides bg">
	<div class="container">
		<!-- navigation bières -->
		<nav class="slides_beers">
			<ul>
				<li>
					<a href="#" title="Carioca" data-link="0">
						Carioca<br>
						<span><?php echo _("The white beer"); ?></span>
					</a>
				</li>
				<li>
					<a href="#" title="Métisse" data-link="1">
						Métisse<br>
						<span><?php echo _("The season beer"); ?></span>
					</a>
				</li>
				<li>
					<a href="#" title="Postiche" data-link="2">
						Postiche<br>
						<span><?php echo _("Russian Imperial Stout"); ?></span>
					</a>								
				</li>
			</ul>
		</nav>
		
		<!-- sliders bières -->
		<div id="slider_container" class="pics">
	    <!-- Carioca -->
			<section>
				<div class="slides_btle">
					<img src="<?php echo BASE_URL ; ?>images/btle_carioca.png">
				</div>
				<div class="slides_txt">
					<header>
						<h1>Carioca</h1>
						<h2>Blanche belge</h2>
					</header>
					<nav class="slides_dots">
						<ul>
							<li>
								<a href="#" data-link="one"></a>
							</li>
							<li>
								<a href="#" data-link="two"></a>
							</li>
							<li>
								<a href="#" data-link="three"></a>
							</li>
						</ul>							
					</nav>
					<div class="articles">
					<article class="one">
						<header>
							<h1>First</h1>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</article>
					<article class="two"><!-- ici -->
						<header>
							<h1>Second</h1>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</article>
					<article class="three">
						<header>
							<h1>Third</h1>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</article>
					</div>
				</div>
			</section>
	    <!-- Métisse -->
			<section>
				<div class="slides_btle">
					<img src="<?php echo BASE_URL ; ?>images/btle_metisse.png">
				</div>
				<div class="slides_txt">
					<header>
						<h1>Métisse</h1>
						<h2>Saison</h2>
					</header>
					<nav>
					</nav>
					<article>
						<header>
							<h1>Title</h1>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</article>
				</div>
			</section>
	    <!-- Postiche -->
			<section>
				<div class="slides_btle">
					<img src="<?php echo BASE_URL ; ?>images/btle_postiche.png" alt="Bouteille de Postiche">
				</div>
				<div class="slides_txt">
					<header>
						<h1>Postiche</h1>
						<h2>Russian Imperial Stout</h2>
					</header>
					<nav>
					</nav>
					<article>
						<header>
							<h1>Title</h1>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</article>
				</div>
			</section>
	    </div>	
	</div>
	</div>
	
	<!-- transition 2 -->
	<div id="tr2" class="transition">
		<div class="story">
	        <h1>Small brewery</h1>
	      	<h2>Great quality</h2>
	    </div>
	</div>
	
	<!-- Brewery presentation -->
	<div id="brewe" class="brewe bg">
	<div class="container">
		<section class="brewe_txt"> 
		      <h1>The brewery</h1>
		      <p>Beer, in some form, can be traced back almost 5000 years to Mesopotamian writings describing daily rations of beer and bread to workers. Before the rise of production breweries, the production of beer took place at home and was the domain of women, as baking and brewing were seen as women's work. Even beard ones".</p>
		</section>
		<div class="brewe_sticker">
			<img src="<?php echo BASE_URL ; ?>images/sticker.png" alt="Good beer & good brewery">
		</div>
	</div>
	</div>
	
	<!-- removed for now
	<div id="tr3" class="transition">
		<div class="story">
	        <h1>People</h1>
	      	<h2>who trust us</h2>
	    </div>
	</div>
	
	<div id="resel_bg" class="bg">
		<div class="story">
			<div class="float-left">
		      <h2 class="welcome">RESELLERS</h2>
		      <p>Insert resellers list here</p>
		    </div>      
	    </div>
	</div> -->
	
	<div id="tr4" class="transition">
		<div class="story">
	        <h1>Contact us</h1>
	      	<h2>We hope to hear from you!</h2>
	    </div>
	</div>
	
	<div id="conta_bg" class="bg">
		<div class="story">
			<div class="float-left">
		      <h2 class="welcome">CONTACT US</h2>
		      <p>Insert contact form here</p>
		    </div>      
	    </div>
	</div>


</body>
</html>

<?php
require_once("inc/config.php");
include_once("inc/i18n.php");
?>

<!doctype html>
<html lang="<?php echo _("en"); ?>">
<head>
	<meta charset="utf-8">
	<title><?php echo _("Lion à Plume's brewery"); ?></title>

	<link rel="stylesheet" href="<?php echo BASE_URL ; ?>css/normalize.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ; ?>css/fonts.css">
	<link rel="stylesheet" href="<?php echo BASE_URL ; ?>css/style.css">
	
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="<?php echo BASE_URL; ?>js/jquery.parallax-1.1.3.js"></script>
	<script src="<?php echo BASE_URL; ?>js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="<?php echo BASE_URL; ?>js/jquery.scrollTo-1.4.2-min.js"></script>
	<script src="<?php echo BASE_URL; ?>js/jquery.cycle-1.3.2.js"></script>
	<script src="<?php echo BASE_URL; ?>js/jquery.projectCode.js"></script>
</head>

<body>
	
	<!-- menu de navigation -->
	<header>
		<nav id="top_menu" class="top_menu">
		<ul id="nav">
			<li class="logo">
				<a href="#intro"><img src="<?php echo BASE_URL ; ?>img/nav_logo.png" alt="Lion à Plume" title="Lion à Plume"></a>
			</li> 
			<li class="t1"><a href="#slides" title="<?php echo _("Our beers"); ?>"><?php echo _("Our beers"); ?></a></li>
			<li class="t2"><a href="#brewe" title="<?php echo _("The brewery"); ?>"><?php echo _("The brewery"); ?></a></li>
			<li class="t3"><a href="#conta" title="<?php echo _("Contact"); ?>"><?php echo _("Contact"); ?></a></li>
		</ul>
		</nav>
		<nav class="lang_menu">
		<ul>
			<li class="en"><a href="../en/">EN</a></li>
			<li class="fr"><a href="../fr/">FR</a></li>
			<li class="nl"><a href="../nl/">NL</a></li>
			<li class="it"><a href="../it/">IT</a></li>
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
							<span>Russian Imperial Stout</span>
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
							<p>01-06-2013</p>						
						</header>
						<p><?php echo _("Here it is! Our long awaited new website is finally online. We really hope that you'll appreciate it has we do!"); ?></p>
					</article>
				</div>
			</section>
		</section>
		<!-- illustration verre -->
		<section class="intro_glass">
			
		<!--img src="img/intro_glass.png" alt="verre de bière" name="verre"-->
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
						<span>Russian Imperial Stout</span>
					</a>								
				</li>
			</ul>
		</nav>
		
		<!-- sliders bières -->
		<div id="slider_container" class="slider_container">

			<!-- Carioca -->
			<section>
				<div class="slides_btle">
					<img src="<?php echo BASE_URL ; ?>img/btle_carioca.png" alt="<?php echo _("Carioca bottle"); ?>">
				</div>
				<div class="slides_txt">
					<header>
						<h1>Carioca</h1>
						<h2>Witbier</h2>
					</header>
					<article>
						<p><?php echo _("White beer, a traditional Belgian wheat beer, was born in the region of Leuven. Unlikeclassical recipes, Carioca is brewed without coriander in order to preserve the soft citrus perfume of its hops (Amarillo &amp; Cascade)."); ?></p>
					</article>
				</div>
			</section>

	    <!-- Métisse -->
			<section>
				<div class="slides_btle">
					<img src="<?php echo BASE_URL ; ?>img/btle_metisse.png" alt="<?php echo _("Métisse bottle"); ?>">
				</div>
				<div class="slides_txt">
					<header>
						<h1>Métisse</h1>
						<h2>Saison</h2>
					</header>
					<article>
						<p><?php echo _("Season beers were brewed in farmhouses in Wallonia, the French-speaking region of Belgium, to refresh farm workers during harvest season. Thanks to a subtle mix of English (E. K. Goldings) and American (Cascade) hops, the Métisse can be distinguished by its delicate balance and franc bitterness."); ?></p>
					</article>
				</div>
			</section>

	    <!-- Postiche -->
			<section>
				<div class="slides_btle">
					<img src="<?php echo BASE_URL ; ?>img/btle_postiche.png" alt="<?php echo _("Postiche bottle"); ?>">
				</div>
				<div class="slides_txt">
					<header>
						<h1>Postiche</h1>
						<h2>Russian Imperial Stout</h2>
					</header>
					<article>
						<p><?php echo _("Brewed in England from the 18th century onwards, this stronger version of the traditional stout was brewed for Empress Catherine II Of Russia's court. The Postiche is a modern version of the style, were flavoured roasted malts come together with the citrus taste of American hops."); ?></p>
					</article>
				</div>
			</section>
	    </div>	
	</div>
	</div>
	
	<!-- transition 2 -->
	<div id="tr2" class="transition">
		<div class="story">
	        <h1><?php echo _("Small brewery"); ?></h1>
	      	<h2><?php echo _("Great quality"); ?></h2>
	    </div>
	</div>
	
	<!-- Brewery presentation -->
	<div id="brewe" class="brewe bg">
	<div class="container">
		<section class="brewe_txt"> 
		      <h1><?php echo _("The brewery"); ?></h1>
		      <p><?php echo _("Lion à Plume is the unusual name of a belgian brewery created in 2009 by a young passionate man, Julien Gascard. The latter does not hesitate to think outside the box and upset traditions in order to craft new possibilities for the simple, yet complex product of beer. In the hope of one day owning his own facility, the brewer rents a microbrewery, where he produces his own authnetic beers without additives or artificial flavours."); ?></p>
		</section>
		<div class="brewe_sticker">
			<img src="<?php echo BASE_URL ; ?>img/sticker.png" alt="<?php echo _("Good beer & good brewery"); ?>">
		</div>
	</div>
	</div>
	
	<!-- tranition 3 -->
	<div id="tr4" class="transition">
		<div class="story">
	        <h1><?php echo _("Contact us"); ?></h1>
	      	<h2><?php echo _("Where to find us"); ?></h2>
	    </div>
	</div>
	
	<!-- Contact form and location -->
	<div id="conta" class="conta bg">
	<div class="container">
		<section class="conta_txt"> 
		      <h1><?php echo _("Say Hello!"); ?></h1>
		      <form>
		      	<fieldset class="form_row">
			      	<label><?php echo _("Name"); ?> <span><?php echo _("(required)"); ?></span></label>
			      	<input type="text" id="full_name" name="full_name" placeholder="John Doe" required>

			      	<label><?php echo _("Email"); ?> <span><?php echo _("(required)"); ?></span></label>
			      	<input type="email" id="email" name="email" placeholder="john@doeltd.com" required>

			      	<label><?php echo _("Telphone"); ?></label>
			      	<input type="tel" id="tel" name="tel" placeholder="+32 4 289 18 91">
		      	</fieldset>

		      	<fieldset class="form_row">
		      		<label><?php echo _("Message"); ?> <span><?php echo _("(required)"); ?></span></label>
			      	<textarea id="message" name="message" required></textarea>
		      	</fieldset>

		      	<fieldset>
		      		<input type="submit" value="<?php echo _("Send"); ?>">
		      	</fieldset>

		      </form>
		</section>
	</div>
	</div>

</body>
</html>

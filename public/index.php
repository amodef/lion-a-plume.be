<?php
	require_once("../config.php");
	include_once(ROOT_PATH . "inc/i18n.php");
	include_once(ROOT_PATH . "inc/process.php");
?>

<!doctype html>
<html lang="<?php echo _("en"); ?>">
<head>
	<meta charset="utf-8">
	<title><?php echo _("Lion à Plume's brewery"); ?></title>

	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/fonts.css">
	<link rel="stylesheet" href="/css/style.css">
	<!--[if lte IE 8]>
		<link rel="stylesheet" type="text/css" href="css/ie8.css" />
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="/js/jquery.parallax-1.1.3.js"></script>
	<script src="/js/jquery.localscroll-1.2.9-min.js"></script>
	<script src="/js/jquery.scrollTo-1.4.6-min.js"></script>
	<script src="/js/jquery.cycle-1.3.2.js"></script>
	<script src="/js/jquery.projectCode.js"></script>
	<script src='https://www.google.com/recaptcha/api.js?hl=<?php echo _("en"); ?>'></script>
</head>

<body>
	
	<!-- menu de navigation -->
	<header>
		<nav id="top_menu" class="top_menu">
		<ul id="nav">
			<li class="logo">
				<a href="#intro"><img src="/img/nav_logo.png" alt="Lion à Plume" title="Lion à Plume"></a>
			</li> 
			<li class="t1"><a href="#slides" title="<?php echo _("Our beers"); ?>"><?php echo _("Our beers"); ?></a></li>
			<li class="t2"><a href="#brewe" title="<?php echo _("The brewery"); ?>"><?php echo _("The brewery"); ?></a></li>
			<li class="t3"><a href="#conta" title="<?php echo _("Contact"); ?>"><?php echo _("Contact"); ?></a></li>
		</ul>
		</nav>
		<nav class="lang_menu">
		<ul>
			<li class="en"><a href="http://<?php echo $_SERVER['HTTP_HOST'] . "/en/"; ?>">EN</a></li>
			<li class="fr"><a href="http://<?php echo $_SERVER['HTTP_HOST'] . "/fr/"; ?>">FR</a></li>
			<li class="nl"><a href="http://<?php echo $_SERVER['HTTP_HOST'] . "/nl/"; ?>">NL</a></li>
			<li class="it"><a href="http://<?php echo $_SERVER['HTTP_HOST'] . "/it/"; ?>">IT</a></li>
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
							<p>25-03-2014</p>						
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
				<div class="slides_btle carioca">
					<img src="/img/btle_carioca.png" alt="<?php echo _("Carioca bottle"); ?>" width="600px">
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
					<img src="/img/btle_metisse.png" alt="<?php echo _("Métisse bottle"); ?>" width="600px">
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
					<img src="/img/btle_postiche.png" alt="<?php echo _("Postiche bottle"); ?>" width="600px">
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
			<p><?php echo _("Lion à Plume is the unusual name of a belgian brewery created in 2009 by a young passionate man, Julien Gascard. Joined by Stephane Fronzée in 2013, they don't hesitate to think outside the box and upset traditions in order to craft new possibilities for the simple, yet complex product of beer. In the hope of one day owning their own facility, the brewers rent a microbrewery, where they produce their own authentic beers without additives or artificial flavours."); ?></p>
		</section>
		<div class="brewe_sticker">
			<img src="/img/sticker.png" alt="<?php echo _("Good beer & good quality"); ?>">
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
				<?php if(isset($_GET["status"]) AND $_GET["status"] == "thanks"){ ?>

					<h1><?php echo _("Thanks for the email!"); ?></h1>
					<p><?php echo _("We'll be in touch shortly."); ?></p>

				<?php }else{ ?>
		      <h1><?php echo _("Say Hello!"); ?></h1>

		      <?php if (isset($error_message)) {
		      	echo "<p class=\"error\">" . $error_message . "</p>";
		      } ?>

		      <form method="post" action="http://<?php echo $_SERVER['HTTP_HOST'] . "/" . $locale; ?>/#conta" novalidate>
		      	<div class="form_column">
			      	<label for="full_name"><?php echo _("Name"); ?> <span><?php echo _("(required)"); ?></span></label>
			      	<input type="text" id="full_name" name="full_name" placeholder="John Doe" value="<?php
			      		if(isset($_POST["full_name"])){
			      			echo $name;
			      		}?>" required>

			      	<label for="email"><?php echo _("Email"); ?> <span><?php echo _("(required)"); ?></span></label>
			      	<input type="email" id="email" name="email" placeholder="john@doeltd.com" value="<?php
			      		if(isset($_POST["email"])){
			      			echo $email;
			      		}?>" required>

			      	<label for="tel"><?php echo _("Telephone"); ?></label>
			      	<input type="tel" id="tel" name="tel" placeholder="+32 4 289 18 91" value="<?php
			      		if(isset($_POST["tel"])){
			      			echo $tel;
			      		}?>">
		      		
		      		<label for="recaptcha"><?php echo _("Human"); ?></label>
		      		<div class="g-recaptcha" name="recaptcha" data-sitekey="6LfXyQwTAAAAADxebUrU0RaLiaGg8B6NY5n3s0RY"></div>
	
		      	</div>

		      	<div class="form_column">
		      		<label><?php echo _("Message"); ?> <span><?php echo _("(required)"); ?></span></label>
			      	<textarea id="message" name="message" required><?php if(isset($_POST["message"])){ echo $message;	}?></textarea>
		      		
		      		<button class="conta_button" type="submit"><?php echo _("Send"); ?></button>
		      	</div>

			      <div class="form_column conta_coord">
			      	<address>
			      		Brasserie du Lion à Plume SPRL<br>
			      		Rue du Cercle 253<br>
			      		6717 Post (Attert)
			      	</address>
			      	<p>
			      		<a href="mailto:info[at]lion-a-plume[dot]be">info@lion-a-plume.be</a>
			      		+32 (0)497 859 932
			      	</p>
			      	<p>
			      		<?php echo $name ; ?>
			      	</p>
			      </div>

		      </form>
		  <?php } ?>
		</section>
	</div>
	</div>

</body>
</html>

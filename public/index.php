<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Get the brews on</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="library/css/style.css">

	<?php

		$url = $_SERVER['HTTP_HOST'];

		if( $url == 'getthebrewson.co.uk' ){

	?>
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-N2M8QZ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-N2M8QZ');</script>
	<!-- End Google Tag Manager -->

	<?php } ?>

</head>
<body>

	<header class="">
		<div class="wrap">

			<h1>Get The Brews On</h1>

		</div>
	</header>

	<section class="">
		<div class="wrap">

			<div class="brew--action">

				<p>Can't decide who's turn it is to make a brew? Add the contenders and let us pick for you!</p>
				<?php /* <p>Not after a cuppa? Why not pick an artist to listen instead!</p> */ ?>


				<?php

					// Get all cookies
					$cookies = $_COOKIE;

					// Dump em all
					//var_dump($cookies);

					// If there are any cookies...
					if( isset($_COOKIE['brewer_total']) ) {

						// ...get the total number of names
						$cookie_total = $_COOKIE['brewer_total'];

					} else {

						// If none, set 0
						$cookie_total = 0;

					}

					// Set this varaible to equal the total number so that older names aren't replaced
					$id = $cookie_total;

				?>
					<ul class="brew-list" id="brewList">
				<?php

						if($cookie_total > 0){

							// Now that we have the numbers, lets start the loops.
							$i = 0;
							do {

								$cookie = $_COOKIE['brewer_number_' . ($i + 1)];

								if( $cookie != ""){

				?>
							<li class="option-<?php echo $i; ?>"><?php echo $cookie; ?></li>
				<?php

								}

								$i++;


							} while ($i < $cookie_total);

						}

				?>
					</ul>
				<?php

					include 'modules/form-addname.php';

				?>

				<a class="btn" id="brews" href="#" title="Shuffle through the names and pick a brewer!">Pick a Brewer</a>
				<a class="btn" id="clearbrewers" href="#" title="Start over, clear all brewers from the list">Remove all Brewers</a>
				<?php /* <a class="btn" id="clear-list" href="#" title="#">Clear my list, start again!</a> */ ?>

			</div>

			<div class="kettle--outer hidden">
				<div class="kettle">
					<span class="kettle--lid"></span>
					<span class="kettle--body"></span>
					<span class="kettle--stove"></span>
					<span class="kettle--flames"></span>
					<p class="kettle--name"></p>
				</div>
			</div>

		</div>
	</section>

	<?php /*
	<footer>
		<div class="wrap">

			<p>Delivered by <a href="http://www.cargocreative.co.uk" title="Visit Cargo Creative's Website">Cargo</a>.</p>

		</div>
	</footer>
	*/ ?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="library/js/libs/jquery.cookies.js"></script>
	<script src="library/js/scripts.js"></script>

</body>
</html>

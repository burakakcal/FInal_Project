<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html lang="en" dir="ltr"><!--<![endif]-->
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="author" content="Burak Akcal">
	<meta name="description" content="Headphones Shop is an online store for purchasing headphones only.">
	<meta name="keywords" content="headphones, wireless headphones">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">



	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?><!-- notice the wordpress admin bar on top-->

</head>
<body>


<div>

<!-- bootstrap nav-walker -->

<nav class="navbar navbar-expand-xl navbar-dark bg-dark" role="navigation">

	<div class="container">

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	  </button>


		<div class="row">

		<a class="navbar-brand" href="/index.html">
		  <!-- logo -->
		<?php
		  if ( function_exists('the_custom_logo')) {
		    the_custom_logo();
		    //echo ('site-title');
		  }
		?>
		  
		</a>

		    <?php
		    wp_nav_menu( array(
		        'theme_location'    => 'top-menu',
		        'depth'             => 3,
		        'container'         => 'div',
		        'container_class'   => 'collapse navbar-collapse',
		        'container_id'      => 'bs-example-navbar-collapse-1',
		        'menu_class'        => 'nav navbar-nav',
		        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		        'walker'            => new WP_Bootstrap_Navwalker(),
		    ) );
		    ?>


		</div>

	</div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</div>

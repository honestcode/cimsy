<?php require_once('cimsy.php'); ?>
<!DOCTYPE html>
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="robots" content="noindex, follow" />
	
	<title><? get_title(); ?></title>
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>	
	<link href="custom_styles.css" rel="stylesheet"/>	

</head>


<body>

<br/>

<div class="container">

	<div class="row">
		
		<div id="content" class="span12">
														
			<?php get_content(); ?>
			
		</div>
			
	</div> <!-- .row -->
			
</div> <!-- .container -->

</body>
</html>
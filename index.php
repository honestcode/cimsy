<?php require_once('markdown.php');

if (!isset($_GET['id'])) {
	$shortened_id = "Document Repository";
	$contents = file_get_contents('files/index.md');
} else {
	$shortened_id = htmlspecialchars($_GET['id']);
	$shortened_id = str_ireplace("/", "|", $shortened_id);
	$contents = @file_get_contents('files/' . $shortened_id . '.md');
}

if (!$contents) {
	$shortened_id = "Not Found";
	$contents = "#Not Found
	
Sorry, but we couldn't find what you're looking for.";
}

?><!DOCTYPE html>
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="robots" content="noindex, follow" />
	
	<title><? echo get_title( $shortened_id ); ?></title>
	
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap-combined.min.css" rel="stylesheet"/>	
	<link href="custom_styles.css" rel="stylesheet"/>	

</head>


<body>

<br/>

<div class="container">

	<div class="row">
		
		<div id="content" class="span12">
														
			<?php echo Markdown($contents); ?>
			
		</div>
			
	</div> <!-- .row -->
			
</div> <!-- .container -->

</body>
</html>
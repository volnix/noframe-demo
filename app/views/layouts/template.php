<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title><?= $this->site_title ?></title>

		<!-- Le styles -->
		<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" />	
		
		<!-- Google Web Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="/personal/simple_demo/assets/css/app.css" />	

		<style>
			@-webkit-viewport   { width: device-width; }
			@-moz-viewport      { width: device-width; }
			@-ms-viewport       { width: device-width; }
			@-o-viewport        { width: device-width; }
			@viewport           { width: device-width; }
		</style>
		
		<script>
			if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
				var msViewportStyle = document.createElement("style")
				msViewportStyle.appendChild(
					document.createTextNode("@-ms-viewport{width:auto!important}")
				)
				document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
			}
		</script>
	</head>
	
	<body>
		
		<div id="content" class="container-fluid">
		
			<h1><?= $this->page_title ?></h1>
			
			<div id="inner-content">
				<?= $this->child() ?>
			</div>
			
		</div> <!-- /content -->
	
	</body>
</html>
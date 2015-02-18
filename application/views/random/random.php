<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Random word</title>
		<link rel="stylesheet" type="text/css" 
		      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	</head>
	<body class="container">
		<h1 class="page-header">Random Word</h1>
		<div class="col-md-5 col-md-offset-3">
			<h3>Random Word attempt # 
				<?php echo $counter; ?></h3>
			<div class="well col-md-offset-1">
			<h4 class="text-center">
				<?php echo strtoupper($word); ?>
			</h4>	
			</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Business Site</title>
		<link rel="stylesheet" href="normalize.css">
		<link rel="stylesheet" href="styles.css">
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
	</head>
	<body>	
		
		<?php include_once("header.php") ?>

		<main>
			<h2>Browse Products</h2>
			<form action="yourcart.php" method="GET">
				<span>Product:</span>
				<select name="product">
					<option value="1">Macbook</option>
					<option value="2">Windows</option>
					<option value="3">Ubuntu</option>
				</select>
				<span>Quantity:</span><input type="number" name="number">
				<button>Add to cart</button>
			</form>
		</main>

		<?php include_once("footer.php") ?>

	</body>
</html>
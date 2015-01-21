<?php 

$number = $_GET["number"];

if ($_GET["product"] == 1){
	$product = "MacBook";
} else if ($_GET["product"] == 2) {
	$product = "Windows";
} else if ($_GET["product"] == 3) {
	$product = "Ubuntu";
} else {
	$product = "unknown";
}


?>


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
	
		<?php if ($product == "MacBook" && $number > 7) { ?>

			<main>
				<h2>Your Cart</h2>
				<h2>You can't order over 7 MacBooks.</h2>
			</main>
		
		<?php } else if ($product == "unknown") { ?>
			
			<main>
				<h2>Your Cart</h2>
				<h2>You haven't chosen a valid product.</h2>
			</main>

		<?php } else if ($number <= 0) { ?>
			
			<main>
				<h2>Your Cart</h2>
				<h2>Please choose a valid number of products.</h2>
			</main>

		<?php } else { ?>

			<main>
				<h2>Your Cart</h2>
				<h2>You want to order <?php echo $number . " " . $product . " machines(s)." ?> </h2>
			</main>

		<?php } ?>

		<?php include_once("footer.php") ?>

	</body>
</html>
<?php 

require_once("productinventory.php");

$quantity = $_GET["number"];
$product = $_GET["id_num"];

$msg = "You're ordering $quantity {$productList[$product]}(s).";
if ($quantity <= 0) {
	$msg = "Please choose a valid quantity.";
} 
if ($productList[$product] == "MacBook" && $quantity > 7) {
	$msg = "We don't have enough {$productList[$product]} in stock. Please try again later.";
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Business Site</title>
		<link rel="stylesheet" href="normalize.css">
		<link rel="stylesheet" href="styles.css">
		<link href='http://fonts.googleapis.com/css?family=Lobster|Lato:300,400' rel='stylesheet' type='text/css'>
	</head>
	<body>	
		
		<?php include_once("header.php") ?>
			
			<main>
				<h2>Your Cart</h2>
				<h2> <?php echo $msg; ?> </h2> 
			</main>

		<?php include_once("footer.php") ?>

	</body>
</html>
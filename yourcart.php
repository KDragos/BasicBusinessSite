<?php 

require_once("productinventory.php");

$quantity = $_GET["number"];
$product = $_GET["id_num"];
$msg = "";
if (array_key_exists($product, $productList)) {
	$msg = "You're ordering $quantity {$productList[$product]}(s).";
	if ($productList[$product] == "MacBook" && $quantity > 7) {
		$msg = "We don't have enough {$productList[$product]} in stock. Please try again later.";
	}
} else {
	$msg = "You've chosen a product that doesn't exist.";
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
				<!-- <h1>Your Cart</h1> -->
				<h1> <?php echo $msg; ?> </h1> 
			</main>

		<?php include_once("footer.php") ?>

	</body>
</html>
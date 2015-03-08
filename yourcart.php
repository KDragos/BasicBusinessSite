<?php 

require_once("productinventory.php");

// This checks and then sets the product id and quantity.
if (isset($_GET["number"]) && isset($_GET["id_num"])) {
	$quantity = $_GET["number"];
	$product = $_GET["id_num"];	
	$msg = "";
	
	if ($quantity >= 1) {
		if (array_key_exists($product, $productList)) {
			$msg = "You're ordering $quantity {$productList[$product]}(s).";
			
			// Per the product specifications, a user can't order more than 7 MacBooks.
			if ($productList[$product] == "MacBook" && $quantity > 7) {
				$msg = "We don't have enough {$productList[$product]} in stock. Please try again later.";
			}
		} else {
			$msg = "You've chosen a product that doesn't exist.";
		}
	} else { 
		// This is if users try to enter a quantity that isn't valid (like -3).
		$msg = "Please enter a valid quantity.";
	}
} else { 
	// Handles cases where there are missing inputs.
	$msg = "An error occurred. Please enter a valid product and quantity.";
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Business Site</title>
		<link rel="stylesheet" href="styles/normalize.css">
		<link rel="stylesheet" href="styles/styles.css">
		<link href='http://fonts.googleapis.com/css?family=Lobster|Lato:300,400' rel='stylesheet' type='text/css'>
	</head>
	<body>	
		
		<?php include_once("header.php") ?>
			
			<main>
				<h1> <?php echo $msg; ?> </h1> 
			</main>

		<?php include_once("footer.php") ?>

	</body>
</html>
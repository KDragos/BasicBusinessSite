<?php 
require_once("productinventory.php");

$options = '';
foreach ($productList as $id=> $product_name) {
	$options .= "<option value=\"$id\">$product_name</option>";
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
			<h2>Browse Products</h2>
			<form action="yourcart.php" method="GET">
				<span>Product:</span>
				
				<select name="id_num">
				<?php echo $options; ?>
				</select>
				
				<span>Quantity:</span>
				<input type="number" name="number">
				<button>Add to cart</button>
			</form>
		</main>

		<?php include_once("footer.php") ?>

	</body>
</html>
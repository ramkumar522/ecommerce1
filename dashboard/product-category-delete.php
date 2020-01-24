<?php require 'header.php';?>
<?php 
$id=$_GET['id'];
$sqlDelete = 'DELETE from product_category WHERE id='.$id;
	if (mysqli_query($db, $sqlDelete)) {
		header("location:product-category.php");
}
?>
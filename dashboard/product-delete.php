<?php require 'header.php';?>
<?php
$id=$_GET['id'];
$sqlDelete ='DELETE from products Where id='.$id;
if(mysqli_query($db, $sqlDelete)){
	header("location:product.php");
}

?> 
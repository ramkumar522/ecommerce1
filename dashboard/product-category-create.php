<?php require 'header.php';?>

<?php 
if($_POST){
	$name=mysqli_real_escape_string($db,$_POST['title']);
	$description=mysqli_real_escape_string($db,$_POST['description']);
	$date=date('Y-m-d');
	$sqlinsert = "INSERT INTO product_category
	(name, description, created_at) 
	VALUES ('$name', '$description', '$date')";
	if(mysqli_query($db,$sqlinsert)){
		header("location:product-category.php");
	}
}

?>
<div class="container">
	<h2 class="mt-4 mb-4">Create Product Category</h2>
	<form method="post">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="title" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description" required></textarea>
		</div>
		<button class="btn btn-success">Create</button>
	</form>

</div>

<?php require 'footer.php';?>
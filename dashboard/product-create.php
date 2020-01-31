<?php require 'header.php';?>

<?php
if($_POST){
	$name=$_POST['title'];
	$description=$_POST['description'];
	$date=date('Y-m-d');
	$category_id=$_POST['category_id'];
	$sqlinsert = "INSERT INTO products
	(name,description,created_at,category_id)
	VALUES ('$name', '$description', '$date',$category_id)";
	if(mysqli_query($db,$sqlinsert)){
		header("location:product.php");
	}
} 
?>

<div class="container">
	<h2 class="mt-4 mb-4">Create Product</h2>
	<form method="post">
		<div class="form-group">
			<label>Product Name </label>
			<input type="text" name="title" class="form-control"
			required>
		</div>

		<div class="form-group">
			<label>Select Product Category</label>
			<select name="category_id" class="form-control">
				<option value="0">Choose Category</option>
				<?php 
				$productCategory = mysqli_query($db,"select * from product_category");
				if($productCategory){
					while($row = mysqli_fetch_array($productCategory, MYSQLI_ASSOC)) {
						?>
						<option value="<?php echo $row['id']?>"><?php echo $row['name'];?></option>
					<?php } }?>
				</select>
			</div>

			<div class="form-group">
				<label>Description </label>
				<textarea class="form-control" name="description"
				required></textarea>
			</div>
			<button class="btn btn-success">Create</button>
		</form>

	</div>
	<?php require 'footer.php';?>
<?php require 'header.php';?>

<?php 
$id=$_GET['id'];
$getData="select * from product_category where id=$id";
$data=mysqli_query($db,$getData);
$row = mysqli_fetch_assoc($data);

if($_POST){
	$name=mysqli_real_escape_string($db,$_POST['title']);
	$description=mysqli_real_escape_string($db,$_POST['description']);
	$sqlupdate = 'UPDATE product_category SET
	name="'.$name.'", description="'.$description.'" WHERE id='.$id;
	if (mysqli_query($db, $sqlupdate)) {
		header("location:product-category.php");
	}
}



?>
<div class="container">
	<h2 class="mt-4 mb-4">Edit Product Category</h2>
	<form method="post">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="title" class="form-control" required value="<?php echo $row['name'];?>">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description" required rows="10">
				<?php echo $row['description'];?>
			</textarea>
		</div>
		<button class="btn btn-success">Update</button>
	</form>

</div>

<?php require 'footer.php';?>
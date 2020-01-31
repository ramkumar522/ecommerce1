<?php require 'header.php';?>

<?php 
$id=$_GET['id'];
$getData="select * from products where id=$id";
$data=mysqli_query($db,$getData);
$row = mysqli_fetch_assoc($data);

if($_POST){
	$name=mysqli_real_escape_string($db,$_POST['title']);
	$description=mysqli_real_escape_string($db,$_POST['description']);
	$category_id=mysqli_real_escape_string($db,$_POST['category_id']);
	$sqlupdate = 'UPDATE products SET
	name="'.$name.'", description="'.$description.'",category_id ="'.$category_id.'" WHERE id='.$id;
	if (mysqli_query($db, $sqlupdate)) {
		header("location:product.php");
	}
}



?>

<div class="container">
	<h2 class="mt-4 mb-4">Edit Products</h2>
	<form method="post">
		<div class="form-group">
			<label>Name </label>
			<input type="text" name="title" class="form-control"
			required value="<?php echo $row['name'];?>">
		</div>

		<div class="form-group">
			<label>Select Product Category</label>
			<select name="category_id" class="form-control">
				<option value="0">Choose Category</option>
				<?php 
				$productCategory = mysqli_query($db,"select * from product_category");
				if($productCategory){
					while($row1 = mysqli_fetch_array($productCategory, MYSQLI_ASSOC)) {
						?>
						<option 
						value="<?php echo $row1['id']?>"
						<?php if($row['category_id']==$row1['id']){?>
							selected
						<?php }?>
						><?php echo $row1['name'];?></option>
					<?php } }?>
				</select>
			</div>
	
		<div class="form-group">
			<label>Description </label>
			<textarea class="form-control" name="description"
			required rows= "10" >
				<?php echo $row['description'];?> 
			</textarea>
		</div>
		<button class="btn btn-success">Update</button>
	</form>

</div>
<?php require 'footer.php';?>
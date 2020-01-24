<?php require 'header.php';?>
<?php 
$productCategory = mysqli_query($db,"select * from product_category");
?>
<div class="container">
	<h2 class="mt-4 mb-4">Product Categories 
    <small><a  href="product-category-create.php" class="btn btn-primary float-right">Create</a></small>
  </h2>
	<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Created At</th>
      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	 if($productCategory){
  	 while($row = mysqli_fetch_array($productCategory, MYSQLI_ASSOC)) {
  	?>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['created_at'];?></td>
      <td class="text-center">
      	<a href="product-category-edit.php?id=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
      	<a href="product-category-delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
<?php } 
}?>
    
  </tbody>
</table>
</div>
<?php require 'footer.php';?>
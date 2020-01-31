<?php require 'header.php';?>
<?php 
$product = mysqli_query($db,"select * from products");
?>
<div class="container">
	<h2 class="mt-4 mb-4">Product 
   <small><a href="product-create.php" class="btn btn-primary float-right">Create</a>
   </small>
  </h2>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	 if($product){
  	 while($row = mysqli_fetch_array($product, MYSQLI_ASSOC)) {
  	?>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['created_at'];?></td>
      <td>
      	<a href="product-edit.php?id=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
      	<a href="product-delete.php?id=<?php echo $row['id'];?>"class="btn btn-danger">Delete</a>
      </td>
    </tr>
<?php } 
}?>
    
  </tbody>
</table>
</div>
<?php require 'footer.php';?>
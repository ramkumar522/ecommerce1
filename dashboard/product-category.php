<?php require 'header.php';?>
<?php 
$productCategory = mysqli_query($db,"select * from product_category");
?>
<div class="container">
	<h2>Product Categories</h2>
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
  	 if($productCategory){
  	 while($row = mysqli_fetch_array($productCategory, MYSQLI_ASSOC)) {
  	?>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['created_at'];?></td>
      <td>
      	<a href="" class="btn btn-info">Edit</a>
      	<a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
<?php } 
}?>
    
  </tbody>
</table>
</div>
<?php require 'footer.php';?>
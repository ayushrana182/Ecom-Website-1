<?php
    require_once'../core/init.php';
    include 'includes/head.php';
    include 'includes/navigation.php';
    //get brands from SQLiteDatabase
    $sql= "SELECT * FROM brand ORDER BY brand";
    $results=$db ->query($sql);
    $errors=array();
    //if add form is submitted
    if(isset($_POST['add_submit'])){
      //check if brand is blank
      if($_POST['brand'] ==''){
        $errors[] .='You must enter a Brand!';
      }
      //check if brands exist in Database

      //display errors
      if(!empty($errors)){
        echo display_errors($errors);
      }else{
        //Add brand to database
      }
    }
?>
<h2 class="text-center">Brands</h2><hr>
<!--BRANDS FORM-->
<div class="text-center">
  <form class="form-inline" action="brands.php" method="post">
    <div class="form-group">
      <label for="brand">Add a Brand:</label>
      <input type="text" name="brand" id="brand" class="form-control" value="<?=((isset($_POST['brand']))?$_POST['brand']:''); ?>">
      <input type="submit" name="add_submit" value="Add Brand" class="btn btn-success"></div>
  </form>
</div><hr>


<table class="table table-bordered table-striped table-auto">
  <thead>
    <th></th>
     <th>Brand</th>
      <th></th>
  </thead>
  <tbody>
    <?php while($brand=mysqli_fetch_assoc($results)): ?>
    <tr>
    <td><a href="brands.php?edit=<?=$brand['id'];?>" class="btn btn-success btn-sm "><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><?=$brand['brand']?></td>
    <td><a href="brands.php?delete=<?=$brand['id'];?>" class="btn btn-danger btn-sm "><span class="glyphicon glyphicon-remove-sign"></td>
    </tr>
  <?php endwhile; ?>
  </tbody>
</table>
<?php include 'includes/footer.php'; ?>


<link rel="stylesheet" href="../css/style.css" type="text/css" />
  <div id="page-container">
<?php
include('../inc/header.php');
include('../inc/connection.php');
$query="select *from category";
  $res=mysqli_query($query);?>
<table id="ltable">
  <tr>
           <th width="82" scope="col">cat_id</th>
            <th width="245" scope="col">cat_name</th>
  </tr>
  <?php
    while($row=mysqli_fetch_array($res))
  {
  $catid=$row['cid'];
  $catname=$row['category_name'];?>
  <tr>
      <td><?php echo $catid?></td>
	  <td><?php echo $catname?></td>
	  <td><a href="show_cat_detail.php?catid=<?php echo $catid?>">Detail</a></td>
	  <td><a onclick="confirm('Are you sure to delete this data')" href="delete_cat.php?catid=<?php echo $catid?>">Delete</a></td>
	  <td><a href="update_category.php?catid=<?php echo $catid?>">Update</a></td>
  </tr>
  <?php
  }
  ?>
    <tr>
      <td colspan="5" scope="col" align="center"><input type="submit" name="insert" value="Insert" /></td>
      </tr>
</table>
<?php
include('../inc/footer.php');
?>
</div>
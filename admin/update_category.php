<link rel="stylesheet" href="../css/style.css" type="text/css" />
  <div id="page-container">
<?php
include('../inc/header.php');
include('../uploading/connection.php');
$catid=$_GET['catid'];
$query="select *from category where cid=$catid";
$res=mysqli_query($query);?>
<form action="admin_update_interface.php" method="get">
<table id="ltable">
  <tr>
           <th width="82" scope="col">vid</th>
            <th width="245" scope="col">video</th>
  </tr>
  <?php
while($row=mysqli_fetch_array($res))
{
$catid=$row['cid'];
$catname=$row['category_name'];?>
  <tr>
      <td><input type="text" value="<?php echo $catid?>" name="cat_id"/></td>
	  <td><input type="text" name="cat_name" id="catname" value="<?php echo $catname?>"/></td>
      </tr>
   <?php
  }
  ?>  
  <tr>
  <td colspan="2"><input type="submit" name="update" value="Update"/>
  </td>
  </tr>
  </table>
  </form>
<?php
include('../inc/footer.php');
?>
</div>
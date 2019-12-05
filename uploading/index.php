<link href="../css/style.css" type="text/css" rel="stylesheet" />
<div id="page-container">
<?php
include('../inc/connection.php');
include('../inc/header.php');
?>
    <form action="insert_data.php" method="post" enctype="multipart/form-data">
	<table border="0" id="utable">
	<tr>
	<td id="utd-first">Select Video File</td>
        <td id="utd-second"><input type="file" name="file" id="file" value="Video"></td>
		</tr>
		<tr>
	<td id="utd-first">Select Snapshot File</td>	
		<td id="utd-second"><input type="file" name="snap" id="file" value="Snapshot"></td>
		</tr>
		<tr>
		<td id="utd-first">Name-</td>	
		<td id="utd-second"><input type="text" name="name" id="name" size="30"></td>
		</tr>
        <tr>
		<td id="utd-first">Description-</td>	
		<td id="utd-second"><textarea name="disc" id="disc"></textarea></td>
		</tr>
		<tr>
		<td id="utd-first">Category-</td>
		<td id="utd-second">
        <select name="id">
        <?php
        $query="select *from category";
		$res=mysqli_query($query);
		while($row=mysqli_fetch_array($res))
		{
		$cat=$row['category_name'];
		$id=$row['cid'];
		?>
       <option value="<?php echo $id;?>"><?php echo $cat;?></option> 
        <?php
        }
		?>
        </select>
        </td>
		</tr>
		<tr>
		<td colspan="2">
       <input type="submit" value="Upload file"></td>
	   </tr>
	   </table>
    </form>
<p>
 <a href="show_data.php">See all files</a>
</p>
   <?php
	include('../inc/footer.php');
	?>
</div>
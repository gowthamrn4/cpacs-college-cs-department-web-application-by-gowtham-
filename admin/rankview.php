<?php
include("db.php");
if($_GET['del'])
{
$delete=mysql_query("delete from rank where no='".$_GET['del']."'");
if($delete>0)
{
header('location:rankview.php');
}
}
?>
<table class="table table-hover">

   
  <tr>
    <td width="64" bordercolor="#000000"> No</td>
    <td width="65">Name</td>
    <td width="65">Roll No</td>
    <td width="76">Register No</td>
    <td width="80">Class</td>
    <td width="65">Image</td>
  </tr>
<?PHP
$select=mysql_query("select * from rank ");
$view=mysql_num_rows($select);
 for($i=0;$i<$view;$i++)
 {
 ?>
  <tr class="success">
    <td class="warning"><?php echo mysql_result($select,$i,"no");?></td>
    <td><img src="<?php echo mysql_result($select,$i,"image");?>" height="100" width="100"/>
    </td>
    <td ><?php echo mysql_result($select,$i,"name");?></td>
    <td > <?php echo mysql_result($select,$i,"rollno");?></td>
    <td ><?php echo mysql_result($select,$i,"regno");?></td>
    <td ><?php echo mysql_result($select,$i,"class");?></td>
    <td><a href="<?php $_SERVER['DOCUMENT_ROOT'];?>?del=<?php echo mysql_result($select,$i,"no");?>">delete</a>&nbsp;|&nbsp;<a href="rankupdate.php?edit=<?php echo mysql_result($select,$i,"no");?>">edit</a></td>
  </tr>
  </tr></center>
  <?PHP
  }
  ?>
  </table>
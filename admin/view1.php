<?php
include("db.php");
if($_GET['del'])
{
$delete=mysql_query("delete from student where rollno='".$_GET['del']."'");
if($delete>0)
{
header('location:view1.php');
}
}
?>
<table class="table table-hover">

   
  <tr>
    <td width="64" bordercolor="#000000">ID No</td>
    <td width="65">Photo</td>
    <td width="65">Name</td>
    <td width="64">Roll No</td>
    <td width="76">Register No</td>
    <td width="80">Class</td>
    <td width="65">Email ID</td>
    <td width="64">Sex</td>
    <td width="66">Phone No</td>
    <td width="103">Father Name</td>
    <td width="98">Mother Name</td>
    <td width="86">Religion</td>
    <td width="149" bordercolor="#000000">Address</td>
    <td width="68">Action</td>
  </tr>
 <?PHP
$select=mysql_query("select * from student ");
$view=mysql_num_rows($select);
 for($i=0;$i<$view;$i++)
 {
 ?>
  <tr class="success">
    <td class="warning"><?php echo mysql_result($select,$i,"idno");?></td>
    <td><img src="<?php echo mysql_result($select,$i,"image");?>" height="100" width="100"/>
    </td>
    <td ><?php echo mysql_result($select,$i,"name");?></td>
    <td > <?php echo mysql_result($select,$i,"rollno");?></td>
    <td ><?php echo mysql_result($select,$i,"regno");?></td>
    <td ><?php echo mysql_result($select,$i,"class");?></td>
    <td ><?php echo mysql_result($select,$i,"email");?></td>
    <td ><?php echo mysql_result($select,$i,"sex");?></td>
    <td ><?php echo mysql_result($select,$i,"phone");?></td>
    <td ><?php echo mysql_result($select,$i,"fathername");?></td>
    <td ><?php echo mysql_result($select,$i,"mothername");?></td>
    <td ><?php echo mysql_result($select,$i,"religion");?></td>
    <td ><?php echo mysql_result($select,$i,"address");?></td>
    
  
    <td><a href="<?php $_SERVER['DOCUMENT_ROOT'];?>?del=<?php echo mysql_result($select,$i,"rollno");?>">delete</a>&nbsp;|&nbsp;<a href="s1update.php?edit=<?php echo mysql_result($select,$i,"rollno");?>">edit</a></td>
  </tr>
  </tr></center>
  <?PHP
  }
  ?>
</table>



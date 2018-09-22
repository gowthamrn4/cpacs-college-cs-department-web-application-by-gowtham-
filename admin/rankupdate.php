<?php
include("db.php");
$select=mysql_query("select * from rank where no='".$_GET['edit']."'");
$view=mysql_num_rows($select);
if($button)
{
$second="1st/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("update rank set  no='$no',name='$name',rollno='$rollno',regno='$regno',class='$class',image='$second' where no='".$_GET['edit']."'");
}
if($insert)
{
echo"Update Successfully";
}
else
{
echo"error";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="830" height="219" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="202">No</td>
    <td width="628"><form id="form1" name="form1" enctype="multipart/form-data" method="post" action="">
      <input type="text" name="no" id="textfield" value="<?php echo mysql_result($select,0,"no")?> " />

    </td>
  </tr>
  <tr>
    <td>Name</td>
    <td>
      <input type="text" name="name" id="textfield2" value="<?php echo mysql_result($select,0,"name")?> "/>
   
    </td>
  </tr>
  <tr>
    <td>Roll No</td>
    <td>
      <input type="text" name="rollno" id="textfield3" value="<?php echo mysql_result($select,0,"rollno")?> "/>
    
    </td>
  </tr>
  <tr>
    <td>Reg No</td>
    <td>
      <input type="text" name="regno" id="textfield4" value="<?php echo mysql_result($select,0,"regno")?> "/>
   
    </td>
  </tr>
  <tr>
    <td>Class</td>
    <td>
      <select name="class" id="select" value="<?php echo mysql_result($select,0,"class")?> ">
      <option>Bsc CS 1St year</option>
      <option>Bsc Cs 2nd Year</option>
      <option>Bsc Cs 3rd Year</option>
      </select>
   
    </td>
  </tr>
  <tr>
    <td>Photo</td>
    <td>
      <input type="file" name="image" id="fileField" value="<?php echo mysql_result($select,0,"image")?> "/>
  
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="button" id="button" value="Submit" />
    </form>
    </td>
  </tr>
</table>
</body>
</html>

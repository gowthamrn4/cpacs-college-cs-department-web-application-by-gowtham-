<?php
include("db.php");
if($button)
{
$second="upload/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("insert into rank(no,name,rollno,regno,class,image)values('$no','$name','$rollno','$regno','$class','$second')");
}
if($insert)
{
echo"insert Successfully";
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
      <input type="text" name="no" id="textfield" />

    </td>
  </tr>
  <tr>
    <td>Name</td>
    <td>
      <input type="text" name="name" id="textfield2" />
   
    </td>
  </tr>
  <tr>
    <td>Roll No</td>
    <td>
      <input type="text" name="rollno" id="textfield3" />
    
    </td>
  </tr>
  <tr>
    <td>Reg No</td>
    <td>
      <input type="text" name="regno" id="textfield4" />
   
    </td>
  </tr>
  <tr>
    <td>Class</td>
    <td>
      <select name="class" id="select">
      <option>Bsc CS 1St year</option>
      <option>Bsc Cs 2nd Year</option>
      <option>Bsc Cs 3rd Year</option>
      </select>
   
    </td>
  </tr>
  <tr>
    <td>Photo</td>
    <td>
      <input type="file" name="image" id="fileField" />
  
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
<a href="rankview.php">Edit</a>
</body>
</html>

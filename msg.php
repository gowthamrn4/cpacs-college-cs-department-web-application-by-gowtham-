<?php
include("db.php");

if($button)
{
$userid=$userid_data[0];
$insert=mysql_query("insert into chat(no,userid,msg)values('$no','$userid','$msg')");

}
if($insert)
{
echo"hi";
}
else
{
echo"bye";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="500">
  <tr>
    <td>no</td>
    <td><form id="form1" name="form1" method="post" action="">
      <input type="text" name="no" id="textfield" />
   
    </td>
  </tr>
  <tr>
    <td>userid</td>
    <td>
      <input type="text" name="userid" id="textfield2" />
   
    </td>
  </tr>
  <tr>
    <td>msg</td>
    <td>
      <textarea name="msg" id="textarea" cols="45" rows="5"></textarea>
   
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

<?php
include("db.php");
if($button)
{
$insert=mysql_query("insert into msg(no,userid,to,msg,time)values('$no','$userid','$to','$msg','$time')");
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
    <td width="110">no</td>
    <td width="378"><form id="form1" name="form1" method="post" action="">
      <input type="text" name="no" id="no" />
 
    </td>
  </tr>
  <tr>
    <td>userid</td>
    <td>
      <input type="text" name="userid" id="userid" />
    </td>
  </tr>
  <tr>
    <td>to</td>
    <td>
      <input type="text" name="to" id="to" />
   
    </td>
  </tr>
  <tr>
    <td>msg</td>
    <td>
      <input type="text" name="msg" id="msg" />
    </td>
  </tr>
  <tr>
    <td>time</td>
    <td>
      <input type="text" name="time" id="time" />
  
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

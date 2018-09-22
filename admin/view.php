<?php
include("db.php");

if($_GET['edit'])
{
$insert=mysql_query("update letter set status=0 where name='".$_GET['edit']."'");
	}
	?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
   $select=mysql_query("select * from letter where name='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>
<title><?php echo $view['name'];?></title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
 <link href="../css/stylish-portfolio.css" rel="stylesheet">

<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<link href="upload/letter.css" rel="stylesheet">
</head>

<body>
<section id="Professor" class="services bg-primary">
<div style="position:absolute; left:40.7%; top:5.2%; font-size:50px"> 
<h3>Leave Letter</h3></div>
<div class="services bg-primary"></div>
  </section>
 
  <div style="position:absolute; left:5.1%; top:10.2%; font-size:50px"> 
<h><?php echo $view['name']; ?></h>
 <div class="im">
<img src="<?php echo $view['image']; ?>" />
</div></div>
   <nav class="navbar navbar-default" role="navigation" >
   <div class="navbar-header" >
      <a class="navbar-brand" href="#"></a>
   </div>
   <div>
 
      
      </ul>
   </div>
</nav><center>
<?php
   $select=mysql_query("select * from letter where name='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>
<font size="+2" >
 <center>
<h><?php echo $view['time'];?></h>Sender(<h><?php echo $view['userid'];?>)</h>
<p>&nbsp;</p>
<center>
<div class="letter">
<table width="500" height="500" >
  <tr>
    <td width="77">Form</td>
    <td width="418">&nbsp;</td>
  </tr>
  <tr>
    <td></td>
    <td><font size="+1"><?php echo $view['name'];?></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1"><?php echo $view['class'];?></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1"><?php echo $view['rollno'];?></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">C.P.A.College</font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">Bodinayakanur</font></td>
  </tr>
  <tr>
    <td>To</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">Head.Of.The.Department</font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">Computer Science</font></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td><font size="+1">C.P.A.College</font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><font size="+1">Bodinayakanur</font></td>
  </tr>
  <tr>
    <td>Sir/Madam</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Sub</td>
    <td><font size="+1"><?php echo $view['sub'];?></font></td>
  </tr>
  <tr>
    <td height="83">&nbsp;</td>
    <td><font size="+1"><?php echo $view['reason'];?></font></td>
  </tr>
  <tr>
    <td height="57">&nbsp;</td>
    <td align="center"><font size="+1">Thanking You</font></td>
  </tr>
  <tr>
    <td height="51">&nbsp;</td>
    
  </tr>
</table></center>

</div>
</div>
</body></div>
</html>

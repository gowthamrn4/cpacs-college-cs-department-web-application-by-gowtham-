<?php 
include("db.php");
$select=mysql_query("select * from timetable where year=1");
$view=mysql_num_rows($select);
if($button)
{
$insert=mysql_query("update timetable set time1='$time1',time2='$time2',time3='$time3',time4='$time4',time5='$time5',twotime1='$twotime1',twotime2='$twotime2',twotime3='$twotime3',twotime4='$twotime4',twotime5='$twotime5',thrtime1='$thrtime1',thrtime2='$thrtime2',thrtime3='$thrtime3',thrtime4='$thrtime4',thrtime5='$thrtime5',fortime1='$fortime1',fortime2='$fortime2',fortime3='$fortime1',fortime4='$fortime4',fortime5='$fortime5'fivtime1='$fivtime1',fivtime2='$fivtime2'fivtime3='$fivtime3',fivtime4='$fivtime1',fivtime5='$fivtime5',sixtime1='$sixtime1',sixtime2='$sixtime2,sixtime3='$sixtime3,sixtime4='$sixtime4,sixtime5='$sixtime1' where firstyear=1");
if($update)
{
header("location:firtimetable.php");
}
else
{
echo"error";
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../css/bootstrap.min.css" rel="stylesheet">
 <link href="../css/stylish-portfolio.css" rel="stylesheet">
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<div class="panel panel-primary">
   <div class="panel-heading">
      <h3 class="panel-title">Panel title</h3>
   </div>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="100%" height="313" border="3">
  <tr>
    <td width="5%">&nbsp;</td>
    <td width="27%">1st</td>
    <td width="17%">2nd</td>
    <td width="17%">3rd</td>
    <td width="17%">4th</td>
    <td width="17%">5th</td>
  </tr>
  <tr>
    <td>Day1</td>
    <td>
      <input type="text" name="time1" id="1day1hr" value="<?php echo mysql_result($select,0,"time1")?>" />
      </form>  
    </td>
    <td>
      <input type="text" name="time2" id="1day2hr" value="<?php echo mysql_result($select,0,"time2")?>" />
   
    </td>
    <td>
      <input type="text" name="time3" id="1day3hr" value="<?php echo mysql_result($select,0,"time3")?>" />
    
    </td>
    <td>
      <input type="text" name="time4" id="1day4hr" value="<?php echo mysql_result($select,0,"time4")?>" />
   
    </td>
    <td>
      <input type="text" name="time5" id="1day5hr" value="<?php echo mysql_result($select,0,"time5")?>" />
   
    </td>
  </tr>
  <tr>
    <td>Day2</td>
    <td>
      <input type="text" name="twotime1" id="2day1hr" value="<?php echo mysql_result($select,0,"twotime1")?>" />
   
    </td>
    <td>
      <input type="text" name="twotime2" id="2day2hr" value="<?php echo mysql_result($select,0,"twotime2")?>" />
    
    </td>
    <td>
      <input type="text" name="twotime3" id="2day3hr" value="<?php echo mysql_result($select,0,"twotime3")?>" />
  
    </td>
    <td>
      <input type="text" name="twotime4" id="2day4hr" value="<?php echo mysql_result($select,0,"twotime4")?>" />
   
    </td>
    <td>
      <input type="text" name="twotime5" id="2day5hr" value="<?php echo mysql_result($select,0,"twotime5")?>" />
   
    </td>
  </tr>
  <tr>
    <td>Day3</td>
    <td>
      <input type="text" name="thrtime1" id="3day1hr" value="<?php echo mysql_result($select,0,"thrtime1")?>"/>
   
    </td>
    <td>
      <input type="text" name="thrtime2" id="3day2hr" value="<?php echo mysql_result($select,0,"thrtime2")?>" />
  
    </td>
    <td>
      <input type="text" name="thrtime3" id="3day3hr" value="<?php echo mysql_result($select,0,"thrtime3")?>" />
  
    </td>
    <td>
      <input type="text" name="thrtime4" id="3day4hr" value="<?php echo mysql_result($select,0,"thrtime4")?>" />
   
    </td>
    <td>
      <input type="text" name="thrtime5" id="3day5hr" value="<?php echo mysql_result($select,0,"thrtime5")?>" />
   
    </td>
  </tr>
  <tr>
    <td>Day4</td>
    <td>
      <input type="text" name="fortime1" id="4day1hr" value="<?php echo mysql_result($select,0,"fortime1")?>"/>
   
    </td>
    <td>
      <input type="text" name="fortime2" id="4day2hr" value="<?php echo mysql_result($select,0,"fortime2")?>" />
  
    </td>
    <td>
      <input type="text" name="fortime3" id="4day3hr" value="<?php echo mysql_result($select,0,"fortime3")?>"/>
   
    </td>
    <td>
      <input type="text" name="fortime4" id="4day4hr" value="<?php echo mysql_result($select,0,"fortime4")?>" />
    
    </td>
    <td>
      <input type="text" name="fortime5" id="4day5hr" value="<?php echo mysql_result($select,0,"fortime5")?>"/>
   
    </td>
  </tr>
  <tr>
    <td>Day5</td>
    <td>
      <input type="text" name="fivtime1" id="5day1hr" value="<?php echo mysql_result($select,0,"fivtime1")?>"/>
  
    </td>
    <td>
      <input type="text" name="fivtime2" id="5day2hr" value="<?php echo mysql_result($select,0,"fivtime2")?>"/>
   
    </td>
    <td>
      <input type="text" name="fivtime3" id="5day3hr" value="<?php echo mysql_result($select,0,"fivtime3")?>"/>
    
    </td>
    <td>
      <input type="text" name="fivtime4" id="5day4hr" value="<?php echo mysql_result($select,0,"fivtime4")?>"/>
  
    </td>
    <td>
      <input type="text" name="fivtime5" id="5day5hr" value="<?php echo mysql_result($select,0,"fivtime5")?>"/>
  
    </td>
  </tr>
  <tr>
    <td>Day6</td>
    <td>
      <input type="text" name="sixtime1" id="6day1hr" value="<?php echo mysql_result($select,0,"sixtime1")?>"/>
  
    </td>
    <td>
      <input type="text" name="sixtime2" id="6day2hr" value="<?php echo mysql_result($select,0,"sixtime2")?>"/>
  
    </td>
    <td>
      <input type="text" name="sixtime3" id="6day3hr" value="<?php echo mysql_result($select,0,"sixtime3")?>"/>
  
    </td>
    <td>
      <input type="text" name="sixtime4" id="6day4hr" value="<?php echo mysql_result($select,0,"sixtime4")?>"/>
    
    </td>
    <td>
      <input type="text" name="sixtime5" id="6day5hr" value="<?php echo mysql_result($select,0,"sixtime5")?>" />
    </td>
   
<input type="submit" name="button" id="button" value="Submit" />
   </form>

    </td>
  <td height="2"></tr>
</table>

</body>
</html>

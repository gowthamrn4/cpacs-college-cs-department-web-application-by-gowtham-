<?php 
include("db.php");
if($button)
{
$insert=mysql_query("insert into timetable3(time1,time2,time3,time4,time5,twotime1,twotime2,twotime3,twotime4,twotime5,thrtime1,thrtime2,thrtime3,thrtime4,thrtime5,fortime1,fortime2,fortime3,fortime4,fortime5,fivtime1,fivtime2,fivtime3,fivtime4,fivtime5,sixtime1,sixtime2,sixtime3,sixtime4,sixtime5)values('$time1','$time2','$time3','$time4','$time5','$twotime1','$twotime2','$twotime3','$twotime4','$twotime5','$thrtime1','$thrtime2','$thrtime3','$thrtime4','$thrtime5','$fortime1','$fortime2','$fortime3','$fortime4','$fortime5','$fivtime1','$fivtime2','$fivtime3','$fivtime4','$fivtime5','$sixtime1','$sixtime2','$sixtime3','$sixtime4','$sixtime5' )");
}
if($insert)
{
echo"Insert Successfully";
}
else
{

}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 <body>   
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="../index.php" onclick=$("#menu-close").click();>Index</a>
            </li>
           <li class="sidebar-brand">
           <li class="sidebar-brand"><a href="timetable.php">1St Year Time Table</a>
       </li>
           <li class="sidebar-brand">
            <li class="sidebar-brand"><a href="timetable2.php">2nd Year Time Table</a></li>
            <li class="sidebar-brand">
            <li class="sidebar-brand"><a href="timetable3.php">3rd Year Time Table</a></li>
        </ul>
        <li class="sidebar-brand">
        <div style="position:absolute; top:10.2%; font-size:50px"> 
          <font size="+3"><a href="../logout.php">Logout</a></h> </font></font>
          </li>
    </nav>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  <title>Admin</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
 <link href="../css/stylish-portfolio.css" rel="stylesheet">
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <ul class="nav nav-pills nav-justified">
   <li ><a href="home2.php">Home</a></li>
   <li><a href="studetails.php">Student Details</a></li>
 <li><a href="ebook.php">E-Books</a></li>
   <li class="active"><a href="timetable.php">Time Table</a></li>
   <li><a href="message.php">Message</a></li>
   <li><a href="leaveletter.php">Leave Letter</a></li>
</ul><br><br><br>

<h><center><font size="+2">3rd Year</font></center></h>

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
      <input type="text" name="time1" id="1day1hr" />
      </form>  
    </td>
    <td>
      <input type="text" name="time2" id="1day2hr" value="" />
   
    </td>
    <td>
      <input type="text" name="time3" id="1day3hr" />
    
    </td>
    <td>
      <input type="text" name="time4" id="1day4hr" />
   
    </td>
    <td>
      <input type="text" name="time5" id="1day5hr" />
   
    </td>
  </tr>
  <tr>
    <td>Day2</td>
    <td>
      <input type="text" name="twotime1" id="2day1hr" />
   
    </td>
    <td>
      <input type="text" name="twotime2" id="2day2hr" />
    
    </td>
    <td>
      <input type="text" name="twotime3" id="2day3hr" />
  
    </td>
    <td>
      <input type="text" name="twotime4" id="2day4hr" />
   
    </td>
    <td>
      <input type="text" name="twotime5" id="2day5hr" />
   
    </td>
  </tr>
  <tr>
    <td>Day3</td>
    <td>
      <input type="text" name="thrtime1" id="3day1hr" />
   
    </td>
    <td>
      <input type="text" name="thrtime2" id="3day2hr" />
  
    </td>
    <td>
      <input type="text" name="thrtime3" id="3day3hr" />
  
    </td>
    <td>
      <input type="text" name="thrtime4" id="3day4hr" />
   
    </td>
    <td>
      <input type="text" name="thrtime5" id="3day5hr" />
   
    </td>
  </tr>
  <tr>
    <td>Day4</td>
    <td>
      <input type="text" name="fortime1" id="4day1hr" />
   
    </td>
    <td>
      <input type="text" name="fortime2" id="4day2hr" />
  
    </td>
    <td>
      <input type="text" name="fortime3" id="4day3hr" />
   
    </td>
    <td>
      <input type="text" name="fortime4" id="4day4hr" />
    
    </td>
    <td>
      <input type="text" name="fortime5" id="4day5hr" />
   
    </td>
  </tr>
  <tr>
    <td>Day5</td>
    <td>
      <input type="text" name="fivtime1" id="5day1hr" />
  
    </td>
    <td>
      <input type="text" name="fivtime2" id="5day2hr" />
   
    </td>
    <td>
      <input type="text" name="fivtime3" id="5day3hr" />
    
    </td>
    <td>
      <input type="text" name="fivtime4" id="5day4hr" />
  
    </td>
    <td>
      <input type="text" name="fivtime5" id="5day5hr" />
  
    </td>
  </tr>
  <tr>
    <td>Day6</td>
    <td>
      <input type="text" name="sixtime1" id="6day1hr" />
  
    </td>
    <td>
      <input type="text" name="sixtime2" id="6day2hr" />
  
    </td>
    <td>
      <input type="text" name="sixtime3" id="6day3hr" />
  
    </td>
    <td>
      <input type="text" name="sixtime4" id="6day4hr" />
    
    </td>
    <td>
      <input type="text" name="sixtime5" id="6day5hr" />
    </td>
   
<input type="submit" name="button" id="button" value="Submit" />
   

    </td>
  <td height="2"></tr>
</table></form>
<script src="../js/jquery.js"></script>

  
    <script src="../js/bootstrap.min.js"></script>

   
    <script>

    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
   
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    
    </script>

</body>
</html>

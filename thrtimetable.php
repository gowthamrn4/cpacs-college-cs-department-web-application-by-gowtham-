<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  <title><?php echo @$_SESSION['uname']; ?></title>

<link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/stylish-portfolio.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  

</head>

<body>
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="index.php" onclick=$("#menu-close").click();>Index</a>
            </li>
            <li class="sidebar-brand">
                <a href="logout.php" onclick=$("#menu-close").click();>Logout</a>
           <li class="sidebar-brand">
          <h><font size="+2"><span style="color:#0066FF"><?php echo $_SESSION['uname']; ?></span></font></h>
          </li>
           <li class="sidebar-brand">
          <img src="<?php echo $row['img']; ?>" width="100" height="100"/></font></h>
          </li>
          <br/>
          <br/>
          <li class="sidebar-brand">
          <h><font size="+2"><span style="color:#0066FF"><?php echo $row['rollno']; ?></span></font></h>
          </li>
           <li class="sidebar-brand">
           <h1><font size="+3"></font></h1>
        </ul>
        <li class="sidebar-brand">
          <h><font size="+3"></font></h>
          </li>
    </nav>
<section id="Professor" class="services bg-primary">
<div style="position:absolute; left:15.7%; top:10.2%; font-size:50px"> 
<h3>3rd Year Time Table</h3></div>
<div class="services bg-primary"></div>
  </section>
  <div style="position:absolute; left:5.1%; top:-3.2%; font-size:50px"> 
  <div class="aaa"><font size="+3"><?php echo $_SESSION['uname']; ?></font></div>
 <div class="imgph">
<img src="<?php 

echo $row['img']; ?>" border="" width="200" height="150" />
</div></div>
   <nav class="navbar navbar-default" role="navigation" >
   <div class="navbar-header" >
      <a class="navbar-brand" href="#"></a>
   </div>
   <div>
 
      <ul class="nav navbar-nav" >
           <li ><a href="home.php">Home</a></li>
         <li><a href="profile.php">My Profile</a></li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             Student Details
               <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li ><a href="student1.php">1st Year</a></li>
               <li ><a href="student2.php">2nd Year</a></li>
               <li><a href="student3.php">3rd Year</a></li>
              </ul>
            <li ><a href="home.php">Leave Letter</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             Time Table
               <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li ><a href="firtimetable.php">1st Year</a></li>
               <li ><a href="secondtimetable.php">2nd Year</a></li>
               <li class="active"><a href="thrtimetable.php">3rd Year</a></li>
              </ul>
               <li ><a href="ebooks.php">E-Books</a></li>
               
                <li ><a href="professor.php">Professor Details</a></li>
                 <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            About
               <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li><a href="firtimetable.php">College</a></li>
               <li><a href="secondtimetable.php">Computer Science Department</a></li>
              
              </ul>
               <li ><a href="ebooks.php">Messages</a></li>   
                 <li ><a href="ebooks.php">Settings</a></li>
                 <li ><a href="ebooks.php">Events</a></li>
         </li>
      </ul>
   </div>
</nav>
 
<?php
$sql=mysql_query(" select * from timetable where year=3");
$row=mysql_fetch_array($sql);
?>

<div style="position:absolute; left:25.7%; top:40.2%; font-size:20px"> 

<table class="table table-condensed">

<table width="150%" border="3">
<tr>
    <td width="15%" height="104" align="center"> Day</td>
    <td width="17%" align="center">1 Hour</td>
    <td width="17%" align="center">2 Hour</td>
    <td width="16%" align="center">3 hour</td>
    <td width="17%" align="center">4 Hour</td>
    <td width="18%"align="center">5 Hour</td>
  </tr>
  <tr>
    <td height="43" align="center" >1 Day</td>
    <td><center><?php echo $row['time1']?></center></td>
    <td><CENTER><?php echo $row['time2']?></CENTER></td>
    <td><center><?php echo $row['time3']?></center></td>
    <td><center><?php echo $row['time4']?></center></td>
    <td><center><?php echo $row['time5']?></center></td>
  </tr>
  <tr>
    <td height="53"  align="center" >2 Day</td>
    <td><center><?php echo $row['twotime1']?></center></td>
    <td><center><?php echo $row['twotime2']?></center></td>
    <td><center><?php echo $row['twotime3']?></center></td>
    <td><center><?php echo $row['twotime4']?></center></td>
    <td><center><?php echo $row['twotime5']?></center></td>
  </tr>
  <tr>
    <td height="56"  align="center">3 Day</td>
    <td><center><?php echo $row['thrtime1']?></center></td>
    <td><center><?php echo $row['thrtime2']?></center></td> 
    <td><center><?php echo $row['thrtime3']?></center></td>
    <td><center><?php echo $row['thrtime4']?></center></td>
    <td><center><?php echo $row['thrtime5']?></center></td>
  </tr>
  <tr>
    <td height="62"  align="center">4 Day</td>
    <td><center><?php echo $row['fortime1']?></center></td>   
    <td><center><?php echo $row['fortime2']?></center></td> 
    <td><center><?php echo $row['fortime3']?></center></td>  
    <td><center><?php echo $row['fortime4']?></center></td> 
    <td><center><?php echo $row['fortime5']?></center></td> 
  </tr>  
  <tr> 
    <td height="56" align="center">5 Day</td>
    <td><center><?php echo $row['fivtime1']?></center></td>
    <td><center><?php echo $row['fivtime2']?></center></td>
    <td><center><?php echo $row['fivtime3']?></center></td>
    <td><center><?php echo $row['fivtime4']?></center></td>
    <td><center><?php echo $row['fivtime5']?></center></td>
  </tr>
  <tr>
    <td height="58"  align="center">6 Day</td>
    <td><center><?php echo $row['sixtime1']?></center></td>   
    <td><center><?php echo $row['sixtime2']?></center></td>
    <td><center><?php echo $row['sixtime3']?></center></td>
    <td><center><?php echo $row['sixtime4']?></center></td>
    <td><center><?php echo $row['sixtime5']?></center></td>
  </tr>
</table>
<script src="js/jquery.js"></script>

  
    <script src="js/bootstrap.min.js"></script>

   
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
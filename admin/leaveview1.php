<?php
include("../db.php");
$name=$_SESSION['name'];
$sql=mysql_query("select * from admin where name='".$name."' ");
$row=mysql_fetch_array($sql);
?>
<?
if($_GET['edit'])
{
$insert=mysql_query("update letter set status=0 where name='".$_GET['edit']."'");
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

  <title><?php echo @$_SESSION['name']; ?></title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
 <link href="../css/stylish-portfolio.css" rel="stylesheet">
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
<a href="../logout.php">Logout</a>
           <li class="sidebar-brand">
          <h><font size="+2"><span style="color:#0066FF"><?php echo $_SESSION['name']; ?></span></font></h>
          </li>
           <li class="sidebar-brand">
          <img src="<?php echo $row['image']; ?>" width="100" height="100"/></font></h>
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
<div style="position:absolute; left:40.7%; top:10.2%; font-size:50px"> 
<h3>Home</h3></div>
<div class="services bg-primary"></div>
  </section>
  <div style="position:absolute; left:5.1%; top:-3.2%; font-size:50px"> 
  <div class="aaa"><font size="+3"><?php echo $_SESSION['name']; ?></font></div>
 <img class="img-circle" src="<?php echo $row['image'];?>" alt="User profile picture" width="100" height="100">
</div></div>
   <section id="Professor" ><center<h></h></center></section>
  <nav class="navbar navbar-default" role="navigation" >
   <div class="navbar-header" >
      <a class="navbar-brand" href="#"></a>
   </div>
   <div>
 <center>
      <ul class="nav navbar-nav" >
   <li class="active"><a href="home2.php">Home</a></li>
   <li><a href="studetails.php">Student Details</a></li>
   <li><a href="ebook.php">E-Books</a></li>
   <li><a href="timetable.php">Time Table</a></li>
   <li><a href="message.php">Message</a></li>
   <li><a href="leaveletter.php">Leave Letter</a></li>
    <li><a href="rank.php">Rank</a></li>
 </ul>
   </div>
</nav>
  <div style="position:absolute; left:25.7%; top:40.2%; "> 
  <div class="col-lg-12">
<ul class="nav nav-tabs">
   <li class="active"><a href="home2.php">Home</a></li>
 <?php
   $select=mysql_query("select * from letter where status=1");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
   <li  class="active"><a style="color:#666666" href="leave1.php"><span data-toggle="tooltip" title="3 New Messages"  style="background-color:#00FF66" class="badge bg-green"><?php echo $view;?> </span>Leave</a></li>   
   <?php
   $select=mysql_query("select * from letter where status=0");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
   <li class="active"><a style="color:#666666" href="oldl.php"><span data-toggle="tooltip" title="3 New Messages"  style="background-color:#00FF66" class="badge bg-green"><?php echo $view;?> </span>Old Letter</a></li>
   
    <?php
$select=mysql_query("select * from letter where class='Bsc Cs1st Year'");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
   <li class="active"><a style="color:#666666" href="1sty.php"><span data-toggle="tooltip" title="3 New Messages"  style="background-color:#00FFCC" class="badge bg-green"><?php echo $view;?> </span>1st Year Leave Letter</a></li>
 
<?php
$select=mysql_query("select * from letter where class='Bsc Cs2nd Year'");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
   <li class="active"><a style="color:#666666" href="2ndy.php"><span data-toggle="tooltip" title="3 New Messages"  style="background-color:#993300" class="badge bg-green"><?php echo $view;?> </span>2nd Year Leave Letter</a></li>      
   <?php
$select=mysql_query("select * from letter where class='Bsc Cs3rd Year'");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?><li class="active"><a style="color:#666666" href="3rdy.php"><span data-toggle="tooltip" title="3 New Messages"  style="background-color:#0066CC" class="badge bg-green"><?php echo $view;?> </span>3rd Year Leave Letter</a></li>
   <li class="active"><a style="color:#666666" href="../logout.php">Logout</a></li>

</ul>
<div class="panel panel-info">
   <div class="panel-heading">
      <h3 class="panel-title">Letter</h3>
   </div>
   <div class="panel-body">
		 


<?php
   $select=mysql_query("select * from letter where name='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>
<font size="+2" >
 <center>
<center>
<div class="letter">
<div class="panel panel-info">
   <div class="panel-heading">
      <h3 class="panel-title"><?php echo $view['time'];?></h>Sender(<h><?php echo $view['userid'];?>)</h3>
   </div>
   <div class="panel-body">
<table width="500" height="500" >
  <tr>
    <td width="77" >Form</td>
    <td width="418">&nbsp;</td><div class="panel panel-info">

    <td width="418"><font size="-1" class="panel panel-info">Start :</font></td></div>
    <td width="300" ><?php echo $view['leavesd'];?></td>
        <td width="418">&nbsp;</td>

    <td width="418"><font size="-1" class="panel panel-info">End :</font></td>
    <td width="300" ><?php echo $view['leaveed'];?></td>
    <td width="418">&nbsp;</td>
    <td width="418">&nbsp;</td>
    <td width="418">&nbsp;</td>
    <td width="418">&nbsp;</td>
        <td width="300" ><img class="img-thumbnail" src="../<?php echo $view['img'];?> " alt="User profile picture" width="100" height="100"></td>

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
</table></center></div><div class="panel-footer"></div>
</div>


<br/>
<br/>
 
  
   

    
</div>
<br/>


</div>

    
</div><center>
<div class="col-md-3">
<li class="list-group-item" style="background:url(../img/bg_noise.png)"">
                  <b>Photo</b> <a class="pull-right"> <img class="img-circle" src="<?php echo $row['image'];?>" alt="User profile picture" width="100" height="100">
</a><br/>
<br/>
<br/>
<br/>
<br/>
                <li class="list-group-item">
                  <b>Name</b> <a class="pull-right">  <?php echo $row['name']; ?>
</a>
                </li>
                <li class="list-group-item">
                  <b>Class</b> <a class="pull-right">  <?php echo $row['class']; ?>
</a>
                </li>
                
                </li>
                </li>
                <li class="list-group-item">
</a>
                </li>
                </li>
                <li class="list-group-item">
</a>
                </li>
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        

             </div>
            </div>
            <!-- /.box-body -->
          </div>
          

   </li></div>
  <br/>
<br/>
   <?php
		  	$time = date("j n   Y, \a\\t g.i a", time());
			$showl=1;
			if($button)
		  {
		  $insert=mysql_query("insert into reply(username,no,sname,status,msg,time,showl)values('$username','$no','$sname','$status','$msg','$time','$showl')");
		  }
            ?>     <div style="position:absolute; ; top:100%; "> 

             <div class="col-lg-10"><label>Message</label>
<li class="list-group-item">
  <form id="form1" name="form1" method="post" action="">
  <?php
   $select=mysql_query("select * from letter where name='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>
      <input type="hidden" name="username" id="textfield" value="<?php echo $view['userid'];?>" placeholder="UserID" required  class="form-control"/>
         <input type="hidden" name="no" id="textfield" value="<?php echo $view['no'];?>" placeholder="UserID" required  class="form-control"/>
         <?php
         $sql=mysql_query("select * from admin where name='".$name."' ");
$row=mysql_fetch_array($sql);
?>
              <input type="hidden" name="sname" id="textfield" value="<?php echo @$_SESSION['name']; ?>" placeholder="UserID" required  class="form-control"/>
    
     <select name="status" id="select">
          <option>Select</option>
<option>Approved</option>
     <option>Not Approved</option>
    </select>
      <textarea name="msg" id="textarea" cols="45" rows="5" placeholder="Message........." required  class="form-control"></textarea>
     


      <input type="submit" name="button" id="button" value="Submit" class="btn btn.bg-navy" />
    </form</div>
<?php 
if($insert)
{
echo"Sent........";
}
else
{
echo"Error";
}
?>
   </li></div>
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
 
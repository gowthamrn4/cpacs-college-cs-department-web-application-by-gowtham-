<?php
include("db.php");
$userid=$_SESSION['uname'];
$sql=mysql_query("select * from signup where userid='".$userid."' ");
$row=mysql_fetch_array($sql);
$status=1;
	$time = date("j n   Y, \a\\t g.i a", time());
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
<a href="logout.php">Logout</a>
           <li class="sidebar-brand">
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
<div style="position:absolute; left:40.7%; top:10.2%; font-size:50px"> 
<h3>Leave Letter</h3></div>
<div class="services bg-primary"></div>
  </section>
  <div style="position:absolute; left:5.1%; top:5.2%; font-size:50px"> 
 <div class="im">
<img src="<?php 

echo $row['img']; ?>" border="" width="200" height="150" class="img-rounded"/>
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
               <li><a href="student1.php">1st Year</a></li>
               <li><a href="student2.php">2nd Year</a></li>
               <li><a href="student3.php">3rd Year</a></li>
              </ul>
            <li class="active"><a href="leaveletter.php">Leave Letter</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             Time Table
               <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li><a href="firtimetable.php">1st Year</a></li>
               <li><a href="secondtimetable.php">2nd Year</a></li>
               <li><a href="thrtimetable.php">3rd Year</a></li>
              </ul>
               <li ><a href="books/index.html/index.php">E-Books</a></li>
               
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
               <li ><a href="message.php">Messages</a></li>   
                 <li ><a href="ebooks.php">Settings</a></li>
                 <li ><a href="event.php">Events</a></li>
         </li>
      </ul>
   </div>
</nav>
<br/>
<br/>
<center><center><div class="panel panel-info">
   <div class="panel-heading">
      <h3 class="panel-title">Letter</h3>
   </div>
   <div class="panel-body">
<div class="form-group">
             <div class="col-sm-6">
             <table align="center">
               <tr> <form name="form1" method="post" action="" enctype="multipart/form-data">
  <td> <input type="hidden" name="username" id="textfield"  placeholder="Userid" required  class="form-control" value="<?php echo $_SESSION['uname']; ?>"></td>
   </div></tr>
   <tr>
   <td>&nbsp;</td>
   </tr>
                <div class="col-sm-2">
      <tr>          
    <td> Name: </td><td><input type="text" name="name" id="textfield"  placeholder="Name" required  class="form-control">
   </div></td>
 </tr>
    <div class="col-sm-2">
    <tr>
    <td> Roll No </td><td><input type="text" name="rollno" id="textfield2"  placeholder="Roll No" required  class="form-control"></td>
    </tr>
  </div>
  
  <div class="col-sm-2">
    <tr><td>Class</td>
    <td><select name="class">
    <option>Bsc Cs1st Year</option>
    <option>BSc Cs2nd Year</option>
    <option>Bsc Cs3rd Year</option>
    <option>Others</option>
    </select></td>
    </tr>
    </div>
  
  <div class="col-sm-4">
     <tr>
    <td>&nbsp;</td><td> <input type="hidden" name="img" id="image" tabindex="3" class="form-control" value="<?php echo $row['img']; ?>" enctype="multipart/form-data"    required/></td></tr>
   </div>
   <div class="col-sm-4">
      <tr>
      <td>Leave Start Date</td><td><input type="text" name="leavesd" id="textfield3"  placeholder="2019/11/02" required  class="form-control"></td>
      </tr>
   </div>
   
   <div class="col-sm-4">
      <tr>
      <td>Leave End Date</td><td><input type="text" name="leaveed" id="textfield3"  placeholder="2019/11/02" required  class="form-control"></td>
      </tr>
   </div>
   
    
    <div class="col-sm-4">
      <tr>
      <td>Sub:</td><td><input type="text" name="sub" id="textfield3"  placeholder="Sub" required  class="form-control"></td>
      </tr>
   </div>
   
   <div class="col-sm-2">
     <tr><td> Reason:</td><td><textarea name="reason" id="textarea" cols="45" rows="5"  placeholder="Reason.........................." required  class="form-control"></textarea>
 </td></tr> </div>
   <div class="col-sm-2">
  <tr>
  <td> <input type="hidden" name="time" id="textfield3"  placeholder="Sub" required  class="form-control" onClick="date()">
   </td></tr></div>
  
      <tr>
      <td><input type="submit" name="button" id="button" value="Submit" size="100" ></td>
      </tr>
    </form>
    </table>
    </div>
    
</div>
</div></div><div class="panel-footer"></div>
</div>

 <br/>
 <br/>
<?php
$username=$_SESSION['uname'];
if($button)
		{
		$insert=mysql_query("insert into letter(userid,name,rollno,class,img,leavesd,leaveed,sub,reason,time,status)values('$userid','$name','$rollno','$class','$img','$leavesd','$leaveed','$sub','$reason','$time','$status')");
		
		}
		if($insert)
{
?>

  <div style="position:absolute; left:70%;  top:50.2%;"> 

	     <div class="alert alert-success" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>Register Sucessfull.........</p></div></div>
<?php
}
else
{
?>  <div style="position:absolute; left:60%;  top:50.2%;  "> 

	     <div class="alert alert-danger" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>Error.....</p></div></div>

<?php
}
?>
<br/>
<div style="position:absolute; left:30.7%; top:38.7%; "> 
  <div class="col-lg-12">
<ul class="nav nav-tabs">
   <?php
$select=mysql_query("select * from letter where userid='".$userid."' ");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
   <li class="active"><a style="color:#666666" href="view.php"><span data-toggle="tooltip" title="3 New Messages" style="background-color:#0099FF" class="badge bg-green"><?php echo $view;?> </span>View Letters</a></li>
    <?php
$select=mysql_query("select * from reply where showl=1 and username='".$userid."'");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
         <li ><a style="color:#666666" href="Message1.php"><span data-toggle="tooltip" title="3 New Messages" style="background-color:#0099FF" class="badge bg-green"><?php echo $view;?> </span>Message</a></li>
 <?php
$select=mysql_query("select * from reply where showl=0 and username='".$userid."'");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
   <li><a style="color:#666666" href="notification.php"><span data-toggle="tooltip" title="3 New Messages" style="background-color:#0099FF" class="badge bg-green"><?php echo $view;?> </span>Older Message</a></li>
  
      <ul class="dropdown-menu">
         <li><a style="color:#CCCCCC" href="#">Swing</a></li>
         <li><a href="#">jMeter</a></li>
         <li><a href="#">EJB</a></li>
         <li class="divider"></li>
         <li><a href="#">Separated link</a></li>
      </ul>
   </li>
   <li><a style="color:#666666" href="logout.php">Logout</a></li>
</ul>
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
 
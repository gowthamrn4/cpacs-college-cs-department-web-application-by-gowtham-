<?php
include("db.php");
$userid=$_SESSION['uname'];
$sql=mysql_query(" select * from signup where userid='".$userid."' ");
$row=mysql_fetch_array($sql);
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
<script src="js/modernizr.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!-- animated-css -->
<script src="js/modernizr.js"></script>

  

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
<div style="position:absolute; left:30.7%; top:10.2%; font-size:50px"> 
<h3>E-Books</h3></div>
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
               <li><a href="secondtimetable.php">2nd Year</a></li>
               <li><a href="thrtimetable.php">3rd Year</a></li>
              </ul>
               <li class="active"><a href="ebooks.php">E-Books</a></li>
               
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
 <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                    <h2>Books</h2></div>
                    <hr class="small">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#">  <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                <a href="books/cprogramming/index.php">
                                    <img class="img-portfolio img-responsive" src="img/cprogramming-icon.png"></a>
                                </a></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                <a href="books/cpluse/index.php">
                                    <img class="img-portfolio img-responsive" src="img/cplusplus-icon.png"></a>
                                </a></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                <a href="books/java/index.php">
                                    <img class="img-portfolio img-responsive" src="img/java-icon.png"></a>
                                </a></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/php-icon.png">
                                </a></div>
                            </div>
                        </div>
                        
                    
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#">  <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/asp-net-icon.png">
                                </a></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/bootstrap-icon.png">
                                </a></div>
                            </div>
                        </div></div>
                        
                           <div class="row">
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#">  <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/css-icon.png">
                                </a></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/html-icon.png">
                                </a></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/html5-icon.png">
                                </a></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/javascript-icon.png">
                                </a></div>
                            </div>
                        </div>
                        
                    
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#">  <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/jquery-icon.png">
                                </a></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/dbms-icon.png">
                                </a></div>
                            </div>
                        </div></div>
                                    <div class="row">
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#">  <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/cprogramming-icon.png">
                                </a></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/mysql-icon.png">
                                </a></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/servlets-icon.png">
                                </a></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/vbscript-icon.png">
                                </a></div>
                            </div>
                        </div>
                        
                    
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#">  <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/software-engineering-icon.png">
                                </a></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/cplusplus-icon.png">
                                </a></div>
                            </div>
                        </div></div>
            </div>
           
        </div>
      
    </section>



   
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
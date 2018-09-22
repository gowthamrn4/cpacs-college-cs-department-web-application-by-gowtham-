<?php
include("db.php");
if(isset($_POST['login']))
{
$file=mysql_query(" SELECT * FROM user WHERE userid='$userid' and password='$password'");
		  $num=mysql_num_rows($file);
		  
		  if($num>0)
		{
				$status=online;

$_SESSION['uname']=mysql_result($file,0,"userid");
  $my=mysql_query("insert into status(userid,status)values('$userid','$status')");
mysql_query("update status set status='Online' where userid='$userid'");

		header("Location:home.php");	
			}
		{
$file1=mysql_query(" SELECT * FROM admin WHERE userid='$userid' and password='$password' ");

		  $num=mysql_num_rows($file1);
		  if($num>0)
  {
$_SESSION['name']=mysql_result($file1,0,"name");
 $my1=mysql_query("insert into show(name,status)values('$name','$status')");
mysql_query("update show set status='Online' where userid='$userid'");
   header("location:admin\home2.php");
   }	
			
 else
   
			{
				echo"password is incorrect";
}
}	
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

    <title>Cs-C.P.A.College</title>
   
<link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/stylish-portfolio.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
<a id="menu-toggle" name="Menu" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Index</a>
            </li>
            <li>
                <a href="#login" onclick=$("#menu-close").click();>Login</a>
            </li>
            <li>
                <a href="#Professor" onclick=$("#menu-close").click();>Our Professor</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();></a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Our Class Room</a>
            </li>
            <li>
                <a href="reg.php" onclick=$("#menu-close").click();>Register</a>
            </li>
        </ul>
    </nav>
  
<header id="top" class="header">
 
        <div class="text-vertical-center">
    
            <h1>Computer Science Department</h1>
            <h3>C.P.A.College,Bodinayakanur</h3>
            <br>
            <a href="#Login" class="btn btn-dark btn-lg" 	cursor:pointer;>Login</a>
        </div></div>
    </header>
<center>
 <div id="gm">
    <section id="login" class="login">
    
        <div class="container">
            <div class="row">
                <div class="form-group">
               
             <div class="col-sm-4"><div class="panel panel-info">
   <div class="panel-heading">
      <h3 class="panel-title">Login</h3>
   </div>
   
   <div class="panel-body">
           <form id="form1" name="form1" method="post" action="">
              <input name="userid" type="text" placeholder="UserID" required  class="form-control"/>
           
         <br/>
         
                <input name="password" type="password" placeholder="Password" required class="form-control"/>
                <br/>       <input name="login" type="submit" value="login" class="btn btn-primary" 	cursor:pointer;/></form>

            </div>  
        </div></div>
      
    </section></div></center></div><div class="panel-footer"></div>
</div>
<br/>
  <br/>
  <br/></center>
  

    <section id="Professor1" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="home-block">
	<div class="container">
		<div class="home-main">
			<div class="home-top">
				<h3></h3>
			</div>
			<div class="home-bottom  wow bounceInLeft" data-wow-delay="0.3s">
   <div class="col-md-3 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="single.html">						
							<div class="item-info">
								<div class="headline">
									Siva Kumar
									<div class="line"> </div>
								</div>
								<div class="date"></div>							
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="img/19ssk.jpg"  alt="" height= "150" width="200" class="img-rounded">
						</div>
					</div>
				</div>
				
				<div class="col-md-3 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="single.html">						
							<div class="item-info">
								<div class="headline">
									K.Madasamy
									<div class="line"> </div>
								</div>
								<div class="date"></div>							
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="img/KM_3.jpg"  alt="" height= "150" width="200" class="img-rounded">
						</div>
					</div>
				</div>
				
                <div class="col-md-3 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="single.html">						
							<div class="item-info">
								<div class="headline">
									R.Murugeshen
									<div class="line"> - </div>
								</div>
								<div class="date"></div>							
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="img/mm.JPG"  height= "150" width="200" class="img-rounded">
						</div>
					</div>
				</div>
                
                
                <div class="col-md-3 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="single.html">						
							<div class="item-info">
								<div class="headline">
									K.Nithiyanantha Kumari
									<div class="line"> - </div>
								</div>
								<div class="date"></div>							
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="img/26knk.jpg"  height= "150" width="200" class="img-rounded">
						</div>
					</div>
				</div>
			  <div class="clearfix"> </div>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
                </div>
              
            </div>
          
       </div>
       
    </section>

  
    <aside class="callout1">
        <div class="text-vertical-center">
             <div class="page-header">
           </div>

    </div>  
  <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
           <center> <h1>Our Department </h1></center>
        </div></div><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
        <div id="myCarousel" class="carousel slide">
   <!-- Carousel indicators -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>   
   <!-- Carousel items -->
   <div class="carousel-inner">
      <div class="item active" >
      
         <img src="img/cs3.jpg" height="100" alt="First slide" data-interval="0.3s">
         <div class="carousel-caption"></div>
      </div>
      <div class="item">
         <img src="img/4.jpg" height="100" alt="Second slide" data-interval="0.3s">
         <div class="carousel-caption"></div>
      </div>
      <div class="item">
         <img src="img/cpa.jpg" height="100" alt="Third slide" data-interval="0.3s">
         <div class="carousel-caption"></div>
      </div>
   </div>
   <!-- Carousel nav -->
   <a class="carousel-control left" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
</div> 
</div>

    </aside>

   
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                    <h2>Our Class Room</h2></div>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">  <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                                </a></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                </a></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                                </a></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#"><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                                </a></div>
                            </div>
                        </div>
                    </div>
               
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
               
            </div>
           
        </div>
      
    </section>


  <?PHP
 
$select=mysql_query("select * from rank where no=1 ");
$row=mysql_fetch_array($select);
 
 ?>
  
  
  
    <center>
   <section id="Professor" class="services bg-primary">
    
        <div class="container">
       
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                   <h2>Rank</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="portfolio-item1">
                       
                           <h>First Year</h>
                         <h1> <?php echo $row['name']; ?> </h1><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                               <img src="admin/<?php echo $row['image']; ?>" width="100" height="100" class="img-thumbnail"/>
     
                            </div>  
                        </div>
						</div>
                        
                        <?PHP
$select=mysql_query("select * from rank where no=2 ");
$row=mysql_fetch_array($select);
 ?>
                        <div class="col-md-4">
                            <div class="portfolio-item1">
                           
                           <h>Second Year</h>
                            <h1> <?php echo $row['name']; ?></h1><div class="banner-main wow zoomIn" data-wow-delay="0.3s">

                               <img src="admin/<?php echo $row['image']; ?>" width="100" height="100" class="img-thumbnail"/>
     
                            </div>
                        </div></div>
                        <?PHP
$select=mysql_query("select * from rank where no=3 ");
$row=mysql_fetch_array($select);
 ?>
                        <div class="col-md-4">
                            <div class="portfolio-item1">
                               <h>Thired Year</h>
                               <h1> <?php echo $row['name']; ?></h1><div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                               <img src="admin/<?php echo $row['image']; ?>" width="100" height="100" class="img-thumbnail"/>
     
                            </div>
                        </div></div>
                       
               
                </div>
               
                        </div>
                    </div></div>
                   
                </div>
              
            </div>
          
        </div>
        
       
    </section>
</center>
   <br/>
   <br/>
   <br/>
 
<div class="home-block">
	<div class="container">
		<div class="home-main">
			<div class="home-top">
				<h3>Latest  News</h3>
			</div>
			<div class="home-bottom  wow bounceInLeft" data-wow-delay="0.3s">
				<div class="col-md-4 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="#">						
							<div class="item-info">
								<div class="headline">
									Our Rooms
									<div class="line"> </div>
								</div>
								<div class="date">February 29, 2016</div>							
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="img/portfolio-1.jpg" class="img-responsive" alt="">
						</div>
					</div>

				</div>
				<div class="col-md-4 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="single.html">						
							<div class="item-info">
								<div class="headline">
									Our Rooms
									<div class="line"> </div>
								</div>
								<div class="date">February 29, 2016</div>							
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="img/portfolio-2.jpg" class="img-responsive" alt="">
						</div>
					</div>
				</div>
				<div class="col-md-4 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="single.html">						
							<div class="item-info">
								<div class="headline">
									Our Rooms
									<div class="line"> </div>
								</div>
								<div class="date">February 29, 2016</div>							
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="img/portfolio-3.jpg" class="img-responsive" alt="">
						</div>
					</div>
				</div>
			  <div class="clearfix"> </div>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>


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
 
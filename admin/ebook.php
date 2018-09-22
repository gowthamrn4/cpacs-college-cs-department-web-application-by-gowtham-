<?php
include("db.php");
if($button)
{
$second="upload/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("insert into book(id,name,image)values('$id','$name','$second')");
}
if($insert)
{
echo"hiiiiiiiii";
}
else
{
echo"error";
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
<link href="../../test/css/bootstrap.min.css" rel="stylesheet">
 <link href="../../test/css/stylish-portfolio.css" rel="stylesheet">
<link href="../../test/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  

</head>

<body>
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="../../test/index.php" onclick=$("#menu-close").click();>Index</a>
            </li>
           <li class="sidebar-brand">
          
        </ul>
    </nav>
<section id="Professor" class="services bg-primary">
<div style="position:absolute; left:40.7%; top:10.2%; font-size:50px"> 
<h3></h3></div>
<div class="services bg-primary"></div>
  </section>
    
<center>   
<table width="50%" height="50">
  <tr>
    <td width="20%">User ID</td>
    <td width="80%">
    <div class="form-group">
    <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
     <div class="col-sm-6">
      <input type="text" name="id" id="id" class="form-control" placeholder="" />
   </div>
    </td>
  </tr>
  <br/>
  <br/>
  <tr>
    <td>Upload Photo</td>
    <td> <div class="col-sm-6">
      <input type="text" name="name" id="name" enctype="multipart/form-data" tabindex="3" class="form-control" />
   </div>
    </td>
  </tr>
  
  <tr>
    <td>Upload Photo</td>
    <td> <div class="col-sm-6">
      <input type="file" name="image" id="book" tabindex="3" class="form-control" placeholder="Upload Photo" />
   </div>
    </td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td> <div class="col-sm-6">
      <input class="btn btn-primary" type="submit" name="button" id="button" value="Signup" /></div>
    </form></div></div>
    </td>
  </tr>
</table></center>

   
    <script src="../../test/js/jquery.js"></script>

  
    <script src="../../test/js/bootstrap.min.js"></script>

   
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
 
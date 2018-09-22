<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>CPA College </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<script src="../scripts/jquery.js" type="text/javascript"></script>
        <script src="../scripts/jquery-ui.js" type="text/javascript"></script>
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<!-- 3 Column Stylesheet Added To The Page And Not To The Layout.css -->
<link rel="stylesheet" href="../styles/3_column.css" type="text/css" />
	
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.html">Education Time</a></h1>
      <p>Free Website Template</p>
    </div>
    <form action="#" method="post" id="login">
      <fieldset>
        <legend>Student Login</legend>
        <input type="password" />
        <input type="text" />
        <div id="forgot">Need <a href="#">Help ?</a> or <a href="#">Forgot Your Details ?</a></div>
        <input type="image" src="images/sign_in.gif" id="signin" alt="Sign In" />
      </fieldset>
    </form>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
     <?php include("../menu.php"); ?>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="left_column">
      <div class="holder">
        <h2 class="title">Topics</h2>
        
        <ul  id="list-category-team">
        <li><a href="#c1" class="open" <?php $a=1;     ?>>Chapter 1</a></li>
         
<li><a href="#c2" <?php $a=2;     ?>>Chapter 2</a></li>
<li><a href="#c3" <?php $a=3;     ?>>Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
<li><a href="#">Chapter 1</a></li>
        </ul>
      </div>
  
    </div>
    <!-- ############ -->
    <div id="content1">
      <h1 class="title">Contents</h1>
       <div id="c1" class="contentblock">
       
       
       
       dfgfff gfgggg fggggggg
       
       
       
       </div>
       <div id="c2" class="contentblock hidden">
       
       
       
       fggfg gfgg gfg
       
       
       
       </div>
       <div id="c3" class="contentblock hidden">
       
       
       
       
       ffff fff
       
       
       </div><br /><br />
     <hr   size="5px"  color="#7F99A9" />
 
    
    
    </div>
    <!-- ############ -->
    
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<?php  include("../footer.php"); ?>
 <script type="text/javascript">
$(function(){
  $('#list-category-team a').on('click', function(e){
    e.preventDefault();

    if($(this).hasClass('open')) {
      // do nothing because the link is already open
    } else {
      var oldcontent = $('#list-category-team a.open').attr('href');
      var newcontent = $(this).attr('href');
      
      $(oldcontent).fadeOut('fast', function(){
        $(newcontent).fadeIn().removeClass('hidden');
        $(oldcontent).addClass('hidden');
      });
      
     
      $('#list-category-team a').removeClass('open');
      $(this).addClass('open');
    }
  });
});


</script>
</body>
</html>
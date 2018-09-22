<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>CPA College </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<script src="scripts/jquery.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui.js" type="text/javascript"></script>
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<!-- 3 Column Stylesheet Added To The Page And Not To The Layout.css -->
<link rel="stylesheet" href="styles/3_column.css" type="text/css" />
	
</head>
<body id="top">
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

<section id="Professor" class="services bg-primary">
<div class="col-sm-2">
                            <div class="portfolio-item">
                                <a href="#">  <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                                <a href="books/cprogramming/index.php">
                                    <img class="img-portfolio img-responsive" src="img/cprogramming-icon.png"></a>
                                </a></div>
                            </div>
  <script src="js/jquery.js"></script>

  
    <script src="js/bootstrap.min.js"></script>

<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
   
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
        <h2 class="title">C Programming Topics</h2>
        
        <ul  id="list-category-team">
<li><a href="index.php"  >Introduction</a></li>         
<li><a href="program_structure.php"> Program structure</a></li>
<li><a href="Data_Type.php">Data Types</a></li>
<li><a href="Variables.php">Variables</a></li>
<li><a href="Constants.php">Constants</a></li>
<li><a href="Storage_Classes.php">Storage Classes</a></li>
<li><a href="Operators.php">Operators</a></li>
<li><a href="Decision_Making.php">Decision_Making</a></li>
<li><a href="Loops.php">Loops</a></li>
<li><a href="Functions.php">Functions</a></li>
<li><a href="Scope_Rules.php"class="open">Scope_Rules</a></li>
<li><a href="Arrays.php">Arrays</a></li>
<li><a href="Pointers.php">Pointers</a></li>
<li><a href="Strings.php">Strings</a></li>
<li><a href="Structures.php">Structures</a></li>
<li><a href="Unions.php">Unions</a></li>
<li><a href="Bit_Fields.php">Bit_Fields</a></li>

<li><a href="Typedef.php">Typedef</a></li>
<li><a href="Input_Output.php">Input_Output</a></li>
<li><a href="File_I/O.php">File_I/O</a></li>
<li><a href="Preprocessors.php">Preprocessors</a></li>
<li><a href="Header_Files.php">Header_Files</a></li>
<li><a href="Type_Casting.php">Type_Casting</a></li>
<li><a href="Error_Handling.php">Error_Handling</a></li>
<li><a href="Recursion.php">Recursion</a></li>
<li><a href="Variable_Aruments.php">Variable_Aruments</a></li>
<li><a href="Memory_Mangement.php">Memory_Mangement</a></li>

        </ul>
      </div>
  
    </div>
    <!-- ############ -->
    <div id="content1">
      <h1 class="title">Contents</h1>
       
       
        <table width="100%" border="0" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;   "  >
    <tr>
    <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:left;"> <a href="Functions.php" style="color:#F0C"><< Previous Page </a></td>
     
      <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:right"><a href="Arrays.php"" style="color:#F0C">Next Page >></a></td>
    </tr>
    </table>
       
       
       
       
       
       
    <p>A scope in any programming is a region of the program where a defined variable can have its existence and beyond that variable can not be accessed. There are three places where variables can be declared in C programming language:</p>
<ol class="list">
<li><p>Inside a function or a block which is called <b>local</b> variables,</p></li>
<li><p>Outside of all functions which is called <b>global</b> variables.</p></li>
<li><p>In the definition of function parameters which is called <b>formal</b> parameters.</p></li>
</ol>
<p>Let us explain what are <b>local</b> and <b>global</b> variables and <b>formal</b> parameters.</p>
<h2>Local Variables</h2>
<p>Variables that are declared inside a function or block are called local variables. They can be used only by statements that are inside that function or block of code. Local variables are not known to functions outside their own. Following is the example using local variables. Here all the variables a, b and c are local to main() function.</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;
 
int main ()
{
  /* local variable declaration */
  int a, b;
  int c;
 
  /* actual initialization */
  a = 10;
  b = 20;
  c = a + b;
 
  printf ("value of a = %d, b = %d and c = %d\n", a, b, c);
 
  return 0;
}
</pre>
<h2>Global Variables</h2>
<p>Global variables are defined outside of a function, usually on top of the program. The global variables will hold their value throughout the lifetime of your program and they can be accessed inside any of the functions defined for the program.</p>
<p>A global variable can be accessed by any function. That is, a global variable is available for use throughout your entire program after its declaration. Following is the example using global and local variables:</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;
 
/* global variable declaration */
int g;
 
int main ()
{
  /* local variable declaration */
  int a, b;
 
  /* actual initialization */
  a = 10;
  b = 20;
  g = a + b;
 
  printf ("value of a = %d, b = %d and g = %d\n", a, b, g);
 
  return 0;
}
</pre>
<p>A program can have same name for local and global variables but value of local variable inside a function will take preference. Following is an example:</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;
 
/* global variable declaration */
int g = 20;
 
int main ()
{
  /* local variable declaration */
  int g = 10;
 
  printf ("value of g = %d\n",  g);
 
  return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result">
value of g = 10
</pre>
<h2>Formal Parameters</h2>
<p>Function parameters, formal parameters, are treated as local variables with-in that function and they will take preference over the global variables. Following is an example:</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;
 
/* global variable declaration */
int a = 20;
 
int main ()
{
  /* local variable declaration in main function */
  int a = 10;
  int b = 20;
  int c = 0;

  printf ("value of a in main() = %d\n",  a);
  c = sum( a, b);
  printf ("value of c in main() = %d\n",  c);

  return 0;
}

/* function to add two integers */
int sum(int a, int b)
{
    printf ("value of a in sum() = %d\n",  a);
    printf ("value of b in sum() = %d\n",  b);

    return a + b;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result">
value of a in main() = 10
value of a in sum() = 10
value of b in sum() = 20
value of c in main() = 30
</pre>
<h2>Initializing Local and Global Variables</h2>
<p>When a local variable is defined, it is not initialized  by the system, you must initialize  it yourself. Global variables are initialized  automatically by the system when you define them as follows:</p>
<table class="src">
<tr><th style="width:30%">Data Type</th><th>Initial Default Value</th></tr>
<tr><td>   int     </td><td>  0    </td> </tr>
<tr><td>   char    </td><td>  '\0' </td> </tr>
<tr><td>   float   </td><td>  0    </td> </tr>
<tr><td>   double   </td><td>  0    </td> </tr>
<tr><td>   pointer </td><td>  NULL </td> </tr>
</table>
<p>It is a good programming practice to initialize variables properly otherwise, your program may produce unexpected results because uninitialized variables will take some garbage value already available at its memory location.</p>

       
       
       
       
       
       
       
       
       
       
       
       
       
       
      <br /><br />
     <hr   size="5px"  color="#7F99A9" />
 
    <table width="100%" border="0" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;   "  >
    <tr>
    <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:left;"> <a href="Functions.php" style="color:#F0C"><< Previous Page </a></td>
     <td style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;"> <a href="index.php" style="color:#F0C">
     <center> Home Page</center> </a>
     </td> 
      <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:right"><a href="Arrays.php"" style="color:#F0C">Next Page >></a></td>
    </tr>
    </table>
    
    </div>
    <!-- ############ -->
    
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->


</body>
</html>
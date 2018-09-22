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
<li><a href="Storage_Classes.php"class="open">Storage Classes</a></li>
<li><a href="Operators.php">Operators</a></li>
<li><a href="Decision_Making.php">Decision_Making</a></li>
<li><a href="Loops.php">Loops</a></li>
<li><a href="Functions.php">Functions</a></li>
<li><a href="Scope_Rules.php">Scope_Rules</a></li>
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
    <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:left;"> <a href="Constants.php" style="color:#F0C"><< Previous Page </a></td>
     
   
      <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:right"><a href="Operators.php" style="color:#F0C">Next Page >></a></td>
    </tr>
    </table>
       
    
<p>A storage class defines the scope (visibility) and life-time of variables and/or functions within a C Program. These specifiers precede the type that they modify. There are the following storage classes, which can be used in a C Program</p>
<ul class="list">
<li><p>auto</p></li>
<li><p>register</p></li>
<li><p>static</p></li>
<li><p>extern</p></li>
</ul>
<h2>The auto Storage Class</h2>
<p>The <b>auto</b> storage class is the default storage class for all local variables.</p>
<pre class="prettyprint">
{
   int mount;
   auto int month;
}
</pre>
 <p>The example above defines two variables with the same storage class, auto can only be used within functions, i.e., local variables. </p>
<h2>The register Storage Class</h2>
<p>The <b>register</b> storage class is used to define local variables that should be stored in a register instead of RAM. This means that the variable has a maximum size equal to the register size (usually one word) and can't have the unary '&amp;' operator applied to it (as it does not have a memory location).</p>
<pre class="prettyprint">
{
   register int  miles;
}
</pre>
<p>The register should only be used for variables that require quick access such as counters. It should also be noted that defining 'register' does not mean that the variable will be stored in a register. It means that it MIGHT be stored in a register depending on hardware and implementation restrictions.</p>
<h2>The static Storage Class</h2>
<p>The <b>static</b> storage class instructs the compiler to keep a local variable in existence during the life-time of the program instead of creating and destroying it each time it comes into and goes out of scope.  Therefore, making local variables static allows them to maintain their values between function calls.</p>
<p>The static modifier may also be applied to global variables. When this is done, it causes that variable's scope to be restricted to the file in which it is declared.</p>
<p>In C programming, when <b>static</b> is used on a class data member, it causes only one copy of that member to be shared by all objects of its class.</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;
 
/* function declaration */
void func(void);
 
static int count = 5; /* global variable */
 
main()
{
   while(count--)
   {
      func();
   }
   return 0;
}
/* function definition */
void func( void )
{
   static int i = 5; /* local static variable */
   i++;

   printf("i is %d and count is %d\n", i, count);
}
</pre>
<p>You may not understand this example at this time because I have used <i>function</i> and <i>global variables</i>, which I have not explained so far. So for now let us proceed even if you do not understand it completely. When the above code is compiled and executed, it produces the following result:</p>
<pre class="result">
i is 6 and count is 4
i is 7 and count is 3
i is 8 and count is 2
i is 9 and count is 1
i is 10 and count is 0
</pre>
<h2>The extern Storage Class</h2>
<p>The <b>extern</b> storage class is used to give a reference  of a global variable that is visible to ALL the program files. When you use 'extern', the variable cannot be initialized  as all it does is point the variable name at a storage location that has been previously defined.</p>
<p>When you have multiple files and you define a global variable  or function, which will be used in other files also, then <i>extern </i> will be used in another file to give reference of defined variable or function. Just for understanding, <i>extern </i> is used to declare a global variable or function  in another file.</p>
<p>The extern modifier is most commonly used when there are two or more files sharing the same global variables or functions as explained below.</p>
<p><b>First File: main.c</b></p>
<pre class="prettyprint tryit" title="support">
#include &lt;stdio.h&gt;
 
int count ;
extern void write_extern();
 
main()
{
   count = 5;
   write_extern();
}
</pre>
<p><b>Second File: support.c</b></p>
<pre class="prettyprint" id="support">
#include &lt;stdio.h&gt;
 
extern int count;
 
void write_extern(void)
{
   printf("count is %d\n", count);
}
</pre>
<p>Here, <i>extern</i> keyword is being used to declare <i>count</i> in the second file where as it has its definition in the first file, main.c. Now, compile these two files as follows:</p>
<pre class="prettyprint">
 $gcc main.c support.c
</pre>
<p>This will produce <b>a.out</b> executable program, when this program is executed, it produces the following result:</p>
<pre class="result">
5
       
       
       
       
    
       
       
       
      <br /><br />
     <hr   size="5px"  color="#7F99A9" />
 
    <table width="100%" border="0" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;   "  >
    <tr>
    <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:left;"> <a href="Constants.php" style="color:#F0C"><< Previous Page </a></td>
     <td style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;"> <a href="index.php" style="color:#F0C">
     <center> Home Page</center> </a>
     </td> 
      <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:right"><a href="Operators.php" style="color:#F0C">Next Page >></a></td>
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
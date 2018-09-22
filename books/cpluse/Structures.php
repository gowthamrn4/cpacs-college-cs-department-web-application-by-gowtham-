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
<li><a href="Scope_Rules.php">Scope_Rules</a></li>
<li><a href="Arrays.php">Arrays</a></li>
<li><a href="Pointers.php">Pointers</a></li>
<li><a href="Strings.php">Strings</a></li>
<li><a href="Structures.php"class="open">Structures</a></li>
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
    <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:left;"> <a href="Strings.php" style="color:#F0C"><< Previous Page </a></td>
      
      <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:right"><a href="Unions.php" style="color:#F0C">Next Page >></a></td>
    </tr>
    </table>
       
       
       
       
       
      <p>C arrays allow you to define type of variables that can hold several data items of the same kind but <b>structure</b> is another user defined data type available in C programming, which allows you to combine data items of different kinds.</p>
<p>Structures are used to represent a record, Suppose you want to keep track of your books in a library. You might want to track the following attributes about each book:</p>
<ul class="list">
<li><p>Title</p> </li>
<li><p>Author</p></li>
<li><p>Subject</p> </li>
<li><p>Book ID</p></li>
</ul>
<h2>Defining a Structure</h2>
<p>To define a structure, you must use the <b>struct</b> statement. The struct statement defines a new data type, with more than one member for your program. The format of the struct statement is this:</p>
<pre class="prettyprint">
struct [structure tag]
{
   member definition;
   member definition;
   ...
   member definition;
} [one or more structure variables];  
</pre>
<p>The <b>structure tag</b> is optional and each member definition is a normal variable definition, such as int i; or float f; or any other valid variable definition. At the end of the structure's definition, before the final semicolon, you can specify one or more structure variables but it is optional. Here is the way you would declare the Book structure:</p>
<pre class="prettyprint">
struct Books
{
   char  title[50];
   char  author[50];
   char  subject[100];
   int   book_id;
} book;  
</pre>
<h2>Accessing Structure Members</h2>
<p>To access any member of a structure, we use the <b>member access operator (.)</b>. The member access operator is coded as a period between the structure variable name and the structure member that we wish to access. You would use <b>struct</b> keyword to define variables of structure type. Following is the example to explain usage of structure:</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
 
struct Books
{
   char  title[50];
   char  author[50];
   char  subject[100];
   int   book_id;
};
 
int main( )
{
   struct Books Book1;        /* Declare Book1 of type Book */
   struct Books Book2;        /* Declare Book2 of type Book */
 
   /* book 1 specification */
   strcpy( Book1.title, "C Programming");
   strcpy( Book1.author, "Nuha Ali"); 
   strcpy( Book1.subject, "C Programming Tutorial");
   Book1.book_id = 6495407;

   /* book 2 specification */
   strcpy( Book2.title, "Telecom Billing");
   strcpy( Book2.author, "Zara Ali");
   strcpy( Book2.subject, "Telecom Billing Tutorial");
   Book2.book_id = 6495700;
 
   /* print Book1 info */
   printf( "Book 1 title : %s\n", Book1.title);
   printf( "Book 1 author : %s\n", Book1.author);
   printf( "Book 1 subject : %s\n", Book1.subject);
   printf( "Book 1 book_id : %d\n", Book1.book_id);

   /* print Book2 info */
   printf( "Book 2 title : %s\n", Book2.title);
   printf( "Book 2 author : %s\n", Book2.author);
   printf( "Book 2 subject : %s\n", Book2.subject);
   printf( "Book 2 book_id : %d\n", Book2.book_id);

   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result">
Book 1 title : C Programming
Book 1 author : Nuha Ali
Book 1 subject : C Programming Tutorial
Book 1 book_id : 6495407
Book 2 title : Telecom Billing
Book 2 author : Zara Ali
Book 2 subject : Telecom Billing Tutorial
Book 2 book_id : 6495700
</pre>
<h2>Structures as Function Arguments</h2>
<p>You can pass a structure as a function argument in very similar way as you pass any other variable or pointer. You would access structure variables in the similar way as you have accessed in the above example:</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
 
struct Books
{
   char  title[50];
   char  author[50];
   char  subject[100];
   int   book_id;
};

/* function declaration */
void printBook( struct Books book );
int main( )
{
   struct Books Book1;        /* Declare Book1 of type Book */
   struct Books Book2;        /* Declare Book2 of type Book */
 
   /* book 1 specification */
   strcpy( Book1.title, "C Programming");
   strcpy( Book1.author, "Nuha Ali"); 
   strcpy( Book1.subject, "C Programming Tutorial");
   Book1.book_id = 6495407;

   /* book 2 specification */
   strcpy( Book2.title, "Telecom Billing");
   strcpy( Book2.author, "Zara Ali");
   strcpy( Book2.subject, "Telecom Billing Tutorial");
   Book2.book_id = 6495700;
 
   /* print Book1 info */
   printBook( Book1 );

   /* Print Book2 info */
   printBook( Book2 );

   return 0;
}
void printBook( struct Books book )
{
   printf( "Book title : %s\n", book.title);
   printf( "Book author : %s\n", book.author);
   printf( "Book subject : %s\n", book.subject);
   printf( "Book book_id : %d\n", book.book_id);
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result">
Book title : C Programming
Book author : Nuha Ali
Book subject : C Programming Tutorial
Book book_id : 6495407
Book title : Telecom Billing
Book author : Zara Ali
Book subject : Telecom Billing Tutorial
Book book_id : 6495700
</pre>
<h2>Pointers to Structures</h2>
<p>You can define pointers to structures in very similar way as you define pointer to any other variable as follows:</p>
<pre class="prettyprint">
struct Books *struct_pointer;
</pre>
<p>Now, you can store the address of a structure variable in the above defined pointer variable. To find the address of a structure variable, place the &amp; operator before the structure's name as follows:</p>
<pre class="prettyprint">
struct_pointer = &amp;Book1;
</pre>
<p>To access the members of a structure using a pointer to that structure, you must use the -&gt; operator as follows:</p>
<pre class="prettyprint">
struct_pointer-&gt;title;
</pre>
<p>Let us re-write above example using structure pointer, hope this will be easy for you to understand the concept:</p>
<pre class="prettyprint tryit">
#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
 
struct Books
{
   char  title[50];
   char  author[50];
   char  subject[100];
   int   book_id;
};

/* function declaration */
void printBook( struct Books *book );
int main( )
{
   struct Books Book1;        /* Declare Book1 of type Book */
   struct Books Book2;        /* Declare Book2 of type Book */
 
   /* book 1 specification */
   strcpy( Book1.title, "C Programming");
   strcpy( Book1.author, "Nuha Ali"); 
   strcpy( Book1.subject, "C Programming Tutorial");
   Book1.book_id = 6495407;

   /* book 2 specification */
   strcpy( Book2.title, "Telecom Billing");
   strcpy( Book2.author, "Zara Ali");
   strcpy( Book2.subject, "Telecom Billing Tutorial");
   Book2.book_id = 6495700;
 
   /* print Book1 info by passing address of Book1 */
   printBook( &amp;Book1 );

   /* print Book2 info by passing address of Book2 */
   printBook( &amp;Book2 );

   return 0;
}
void printBook( struct Books *book )
{
   printf( "Book title : %s\n", book-&gt;title);
   printf( "Book author : %s\n", book-&gt;author);
   printf( "Book subject : %s\n", book-&gt;subject);
   printf( "Book book_id : %d\n", book-&gt;book_id);
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result">
Book title : C Programming
Book author : Nuha Ali
Book subject : C Programming Tutorial
Book book_id : 6495407
Book title : Telecom Billing
Book author : Zara Ali
Book subject : Telecom Billing Tutorial
Book book_id : 6495700
</pre>
<h2>Bit Fields</h2>
<p>Bit Fields allow the packing of data in a structure. This is especially useful when memory or data storage is at a premium. Typical examples:</p>
<ul class="list">
<li><p>Packing several objects into a machine word. e.g. 1 bit flags can be compacted.</p></li>
<li><p>Reading external file formats -- non-standard file formats could be read in. E.g. 9 bit integers.</p></li>
</ul>
<p>C allows us do this in a structure definition by putting :bit length after the variable. For example:</p>
<pre class="prettyprint">
struct packed_struct {
  unsigned int f1:1;
  unsigned int f2:1;
  unsigned int f3:1;
  unsigned int f4:1;
  unsigned int type:4;
  unsigned int my_int:9;
} pack;
</pre>
<p>Here, the packed_struct contains 6 members: Four 1 bit flags f1..f3, a 4 bit type and a 9 bit my_int.</p>
<p>C automatically packs the above bit fields as compactly as possible, provided that the maximum length of the field is less than or equal to the integer word length of the computer. If this is not the case then some compilers may allow memory overlap for the fields whilst other would store the next field in the next word.</p>
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
      <br /><br />
     <hr   size="5px"  color="#7F99A9" />
 
    <table width="100%" border="0" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;   "  >
    <tr>
    <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:left;"> <a href="Strings.php" style="color:#F0C"><< Previous Page </a></td>
     <td style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;"> <a href="index.php" style="color:#F0C">
     <center> Home Page</center> </a>
     </td> 
      <td  style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; float:right"><a href="Unions.php" style="color:#F0C">Next Page >></a></td>
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
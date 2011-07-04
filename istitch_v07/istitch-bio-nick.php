<?php
//sets the page title
$page_title = 'studio';
//sets the keywords
$keywords = 'san diego graphic design, AIGA, AIGA san diego,  graphic design, print, web, communication, nick cottrell';
//also includes the header
include ('includes/header.php');
?>

<!--CONTENT-->
<div id="content">
<!--//-->

<?php
include ('includes/nav1.php');
?>

<!--#right column#-->
<!--main right-->
<div id="rightcol">
<!--//-->

	<h1>nick cottrell</h1>
	<h2>print/web/graphic design</h2>
	
	<p>Nick Cottrell is the principal of <em>istitch graphic communication</em>, a San Diego-based graphic design studio specializing in the development of branding and identity projects for a variety of media ranging from print to the web.</p>

	<p>With experience in many areas, Cottrell has worked on numerous projects for a wide range of clientele. His pasion for creative problem solving has allowed him to distinguish himself in the San Diego design community. Cottrell received a B.A. in Art from San Diego State University and has sat on the Board of Directors of the AIGA San Diego chapter.</p>

	
	<div class="divide"></div>
	
	<p><em>Whether your looking to take on a communication challenge in your own business, outsource a project, or you need an extra hand at your design studio, contact Nick Cottrell and discuss the limitless possibilities. </em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<img src="images/nick_cottrell.jpg" alt="Nick Cottrell" />

<!--//-->
</div>
<!--end main middle-->

<!--middle top-->
<div id="top_midcol">
<!--//-->

<?php
include ('includes/recent.php');
?>

<!--//-->
</div>
<!--middle top-->
<!--#end middle column#-->

<!--#left column#-->
<!--top left-->
<div id="top_leftcol">
<!--//-->

<?php
include ('includes/letstalk.php');
?>

<!--//-->
</div>
<!--end top left-->

<!--main left-->
<div id="leftcol">
<!--//-->

	<div class="divide"></div>
	
<?php
include ('includes/studio-links.php');
?>


<!--//-->
</div>
<!--end main left-->
<!--#end left column#-->

<!--//-->
</div>
<!--END CONTENT-->

<?php
include ('includes/footer.php');
?>
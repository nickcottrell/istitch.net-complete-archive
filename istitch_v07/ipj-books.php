<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, print, books, perfect bound, production, management, layout';
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

	<h1>IPJ lecture series</h1>
	<h2>perfect bound books</h2>
	
	<p>While employed at <a href="http://www.buchanandesign.com" target="_blank">Buchanan Design</a>, istitch built a series of books for the Institute for Peace and Justice <em>Distinguished Lecture Series</em>, featuring transcribed lectures of some of the top diplomats in the world.</p>
	
	<p>With the design of the books already established, production involved management of the layout and print-production of all six books. istitch worked with the client to manage the content and numerous copy edits and also worked with the printing press to ensure the quality of the print process. </p>
	
	<div class="divide"></div>
	
	<p><em>This project was completed while employed at Buchanan Design. The Institute for Peace and Justice at the University of San Diego is a client of Buchanan Design.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/ipj_books.jpg" alt="ipj books" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/ipjbooks.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
	so.write("imagecontent");
	// ]]>
	</script>

<!--//-->
</div>
<!--end main middle-->

<!--middle top-->
<div id="top_midcol">
<!--//-->

	<h3>Related Projects:</h3>
	<ul>
	<li><a href="powerwave.php">Powerwave Brochures</a></li>
	<li><a href="zoo-brochure.php">Zoo Brochure</a></li>
	<li><a href="ipj-card.php">IPJ Holiday Card</a></li>
	</ul>

<!--//-->
</div>
<!--middle top-->
<!--#end middle column#-->

<!--#left column#-->
<!--top left-->
<div id="top_leftcol">
<!--//-->

	<h4>Let's Talk</h4>
	<div class="copy2"><p>Contact istitch if you have a project you'd like to discuss.</p></div>
	
	<a class="arrow" href="#"><div class="arrow_text">Go</div></a>

<!--//-->
</div>
<!--end top left-->

<!--main left-->
<div id="leftcol">
<!--//-->

	<div class="divide"></div>
	
<?php
include ('includes/projects.php');
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
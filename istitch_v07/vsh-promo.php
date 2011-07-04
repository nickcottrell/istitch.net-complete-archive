<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, promo, cards';
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

	<h1>house of cards</h1>
	<h2>pet hospital promo</h2>
	
	<p>While employed at <a href="http://www.buchanandesign.com" target="_blank">Buchanan Design</a> (BD), istitch worked on a collaborative studio project to create a unique promotion for a brand new, state-of-the-art veterinary hospital in San Diego. "Built from the Ground Up" was the concept of the piece, emphasizing the ingenuity of the project. The box of numbered cards were specially cut so that they would fit together to create a standing structure and featured information about the facility.</p>
	
	<p>istitch played a vital role in the collaborative effort by creating the complete typographic layout for each card, while also managing the print-production process. Each member of the BD studio designed the graphics on the back of the cards.
	
	<div class="divide"></div>
	
	<p><em>This collaborative project was completed while employed at Buchanan Design. Veterinary Specialty Hospital is a client of Buchanan Design.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/vsh_cards.jpg" alt="vsh promo" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/vshcards.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="vsh-stationery.php">VSH Stationery, </a></li>
	<li><a href="zoo.php">Zoo Brochure, </a></li>
	<li><a href="ruff-haus.php">Ruff Haus Stationery</a></li>
	</ul>

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
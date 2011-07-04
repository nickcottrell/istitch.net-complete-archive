<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, production, brochures, technology';
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

	<h1>powerwave</h1>
	<h2>communications brochures</h2>
	
	<p>istitch was recruited by <a href="http://www.diseno-inc.com" target="_blank">Diseno Communications</a> (DC) and <a href="http://www.kressdesign.com" target="_blank">Kress Design Group</a> (KDG) to assist in the production and content management of a series of brochures for communications company Powerwave. The wave of designs took place in the wake of several new mergers and brand acquisitions for Powerwave.</p>
	
	<p>With most of the design and art-direction provided by DC and KDG, the production process involved the layout and content management of several pieces--the largest being an 80 page book full of charts and graphs of cryptic technical data.</p>
	
	<div class="divide"></div>
	
	<p><em>This project was completed while under contract at Diseno Communications in association with Kress Design Group.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/powerwave.jpg" alt="powerwave brochures" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/powerwave.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="ipj-books.php">IPJ books, </a></li>
	<li><a href="zoo.php">Zoo Brochure, </a></li>
	<li><a href="nortel.php">Nortel Networks</a></li>
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
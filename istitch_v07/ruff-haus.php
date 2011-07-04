<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, stationery, letterhead, die cut, design, business cards';
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

	<h1>ruff haus</h1>
	<h2>stationery for design company</h2>
	
	<p>istitch was recruited by San Diego-based <a href="http://www.ruffhaus.com" target="_blank">Ruff Haus Design</a> to create a stationery system that is based on the central "dog" concept. The solution was a special die-cut business card that introduced the company as "Your Loyal Marketing Companion." Each companion piece features a dog tag as the central unifying element.</p>
	
	<p>istitch worked directly with Ruff Haus Principal Joni Bailey on the conceptual development of the project and was in charge of the graphic development and print production.</p>
	
	<div class="divide"></div>
	
	<p><em>This piece was completed while under contract with Ruff Haus Design, Inc. The project was completed at the istitch studio.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/ruff_haus.jpg" alt="ruff haus stationery" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/ruffhaus.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="vsh-promo.php">VSH Promo, </a></li>
	<li><a href="zoo.php">Zoo Brochure</a></li>
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
<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, stationery, system';
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

	<h1>VSH stationery</h1>
	<h2>pet hospital stationery</h2>
	
	<p>While employed at <a href="http://www.buchanandesign.com" target="_blank">Buchanan Design</a>, istitch created the stationery system for Veterinary Specialty Hospital. The mix of earth tones and clean lines provides the right balance of technology and care that is exemplified in the facility.</p>
	
	<p>istitch worked on the initial concept, graphic development and print-production of the entire system. </p>
	
	<div class="divide"></div>
	
	<p><em>This project was completed while employed at Buchanan Design. Veterinary Specialty Hospital is a client of Buchanan Design.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/vsh_stationery.jpg" alt="vsh stationery" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/vshstationery.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="vsh-promo.php">VSH Promo, </a></li>
	<li><a href="ruff-haus.php">Ruff Haus Stationery, </a></li>
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

<!--//-->
</div>
</div>
<!--END CENTERED LAYOUT-->

</body>
</html>

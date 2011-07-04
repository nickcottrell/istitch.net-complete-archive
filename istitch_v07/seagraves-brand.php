<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, seagraves, branding';
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

	<h1>seagraves</h1>
	<h2>branding and support</h2>
	
	<p>San Diego veteran surf-board shaper Gary Seagraves offers super high-quality custom surfboards and is one of the best in the board shaping business. The new branding incorporates clean sophisticated typography, coupled with a "quilt" pattern made of surfing and surfboard-related imagery.</p>
	
	<p>As a current istitch client, the on-going process for Seagraves involves conceptual development and design, print production and web development.</p>
	
	<div class="divide"></div>
	
	<p><em>The project shown here was completed at the istitch studio.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/seagraves.jpg" alt="seagraves brand" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/seagraves.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="ruff-haus.php">Ruff Haus Stationery, </a></li>
	<li><a href="seagraves-website.php">Seagraves Website</a></li>
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
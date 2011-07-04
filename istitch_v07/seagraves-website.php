<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, seagraves, website';
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
	<h2>website</h2>
	
	<p>San Diego veteran surf-board shaper Gary Seagraves offers super high-quality custom surfboards and is one of the best in the board shaping business. This flash website allows Seagraves to promote services and is integrated with paypal so that customers can make payments online.</p>
	
	<p>As a current istitch client, the on-going process for Seagraves involves conceptual development and design, print production and web development.</p>
	
	<div class="divide"></div>
	
	<p><em>This project was completed at the istitch studio. Click <a href="http://www.surfboards.seagraves.com" target="_blank">here</a> to view site.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/seag_site_01.jpg" alt="Seagraves Website" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/seag_site.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="seagraves-brand.php">Seagraves Brand, </a></li>
	<li><a href="kevin-roche-photography.php">Kevin Roche Website, </a></li>
	<li><a href="blue-motif-web.php">Blue Motif Website</a></li>
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
<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, websites, photography website, commecial photography, kevin roche photography';
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

	<h1>kevin roche photography</h1>
	<h2>commercial photography website</h2>
	
	<p>With an existing logo already being used in other aspects of Roche's photography business, the tailored solution was the addition of a "bar code" graphic that was incorporated on the site and supporting collateral. The graphic allows each piece to stand out as a "commercial" work while also providing the businessÌs phone number. The new element, sophisticated look and simple navigation, allow images to stand out, with vivid color and composition.</p>
	
	<div class="divide"></div>
	
	<p><em>This project was completed at the istitch studio.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/krp_03.jpg" alt="Kevin Roche Photography" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/krp_site.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="seagraves-website.php">Seagraves Website, </a></li>
	<li><a href="blue-motif-web.php">Blue Motif Website, </a></li>
	<li><a href="the-white-pebble-site.php">The White Pebble Website</a></li>
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
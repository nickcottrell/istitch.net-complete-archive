<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, blue motif, architecture, flash, web';
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

	<h1>blue motif web</h1>
	<h2>architectural firm website</h2>
	
	<p>istitch was recruited by <a href="http://www.miraclebrand.com" target="_blank">Miraclebrand Design</a> (MB) to produce the Blue Motif Website, adding motion to the existing artwork designed by MB. The design was part of MB's overhaul of the Blue Motif brand. Clean lines, slick transitions and modular site structure highlight the renderings and photography of this San Diego-based architectural firm.</p>
	
	<p>With the basic design and page layout established by MB, istitch created the hybrid flash/CSS website structure along with the animated transitions and navigation functionality.</p>
	
	<div class="divide"></div>
	
	<p><em>This project was completed under contract with Miraclebrand Design. Blue Motif is a client of Miraclebrand Design.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/blue_motif.jpg" alt="blue motif website" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/bluemotif.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
	so.write("imagecontent");
	// ]]>
	</script>

<!--//-->
</div>
<!--end main middle-->

<!--middle top-->
<div id="top_midcol">
<!--//-->

	<h3>Similar Projects:</h3>
	<ul>
	<li><a href="cassel-financial-web.php">Cassel Financial Web, </a></li>
	<li><a href="safe-site.php">SAFE Website</a></li>
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
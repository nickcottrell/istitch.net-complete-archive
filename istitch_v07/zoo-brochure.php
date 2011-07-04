<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, zoo, brochure';
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

	<h1>zoo brochure</h1>
	<h2>san diego zoo</h2>
	
	<p>istitch was recruited by <a href="http://www.miraclebrand.com" target="_blank">Miraclebrand Design</a> to collaborate on a brochure for the world renowned San Diego Zoo. The piece was part of a marketing campaign to raise funds for the zoo's veterinary medical facility. The concept was to use "generational" photography of the animals to symbolize the act of caring for the next generation of animals to be cared for by the zoo.</p>
	
	<div class="divide"></div>
	
	<p><em>This project was completed while under contract with Miraclebrand. The San Diego Zoological Society is a client of Miraclebrand.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/zoo.jpg" alt="zoo brochure" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/zoo.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="powerwave-brochures.php">Powerwave Brochures</a></li>
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
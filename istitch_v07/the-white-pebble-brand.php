<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, the white pebble, ethical products, sustainability, ethical clothing brand';
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

	<h1>the white pebble</h1>
	<h2>logo and brand identity</h2>
	
	<p>The White Pebble is a retail clothing company that specializes in ethical and sustainable products made out of a variety of high-quality, sustainable materials such as bamboo, hemp, soy and organic cotton. The original concept for the brand has to do with an Eastern belief that each person collects and carries with them black or white pebbles that represent ethical and non-ethical choices they make throughout life.</p>
	
	<p>The logo and graphic design are used to articulate the powerful story, which helps to educate potential customers about the significance of the brand. The istitch creative team was responsible for the conceptual development and graphic design the logo, branding, initial print-design, and web development.</p>
	
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
	
	<div id="imagecontent"><img src="images/01projects/twp_01.jpg" alt="The White Pebble Brand" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/twp_brand.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="the-white-pebble-site.php">The White Pebble Website, </a></li>
	<li><a href="seagraves-brand.php">Seagraves Brand, </a></li>
	<li><a href="vsh-stationery.php">VSH Stationery</a></li>
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
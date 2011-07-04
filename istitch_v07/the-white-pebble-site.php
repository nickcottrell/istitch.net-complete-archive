<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, the white pebble, ethical products, sustainability, e-commerce websites, clothing company website';
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
	<h2>e-commerce website</h2>
	
	<p>The White Pebble is a retail clothing company that specializes in ethical and sustainable products. The company's virtual store front is a fully functioning e-commerce website, highlighting products made out of a variety of high-quality, sustainable materials such as bamboo, hemp, soy and organic cotton.</p>
	
	<p>The istitch creative team was responsible for the development of the site. This process included XHTML, CSS, PHP web development and interfacing with the programming team to create and manage the e-commerce functionality.</p>
	
	<div class="divide"></div>
	
	<p><em>This project was completed at the istitch studio. Click <a href="http://thewhitepebble.com" target="_blank">here</a> to view site.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/twpweb_01.jpg" alt="The White Pebble Website" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/twp_site.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="the-white-pebble-brand.php">The White Pebble Brand, </a></li>
	<li><a href="cassel-financial-web.php">Cassel Financial Website, </a></li>
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
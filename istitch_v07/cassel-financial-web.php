<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, istitch, graphic design in san diego, cassel financial website, search engine optimization';
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

	<h1>cassel financial website</h1>
	<h2>san diego mortgage company</h2>
	
	<p>San Diego-based mortgage company Cassel Financial approached istitch to re-design their existing website and brand. The focus of the effort was on the website, which is used as a tool to communicate with prosective and existing clients.</p>
	
	<p>istitch worked directly with Cassel Financial in the design, management and production of the website. The process involved full-scale development of all graphic elements and artwork, (X)HTML and CSS structure, PHP programming and development, as well as search engine optimization.</p>
	
	
	<!--<div class="divide"></div>
	
	<p><em><a href="http://www.casselfinancial.com" target="_blank">View Site.</a> Bonus: go to <a href="http://www.google.com" targe="_blank">Google</a> and enter "san diego mortgages" as a search term and log onto the site from there.</em></p>-->

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/cassel_web.jpg" alt="casselfinancial website" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/casselweb.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="blue-motif-web.php">Blue Motif Website,</a></li>
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
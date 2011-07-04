<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, web marketing, marketing, communication';
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

	<h1>web marketing</h1>
	<h2>an adjustable framework</h2>
	
	<p>Today, there is a constant stream of new opportunities to reach a consumer base or target market. Each one requires a whole set of options and can offer a unique benefit to an overall marketing strategy. Whether it be dynamic websites, email marketing, or mobile web interfaces, we tailor flexible communication systems to a variety of situations.</p>
	
	<p>At istitch, we specialize in branding and print/web integration, which allows us to create designs that create a seemless transition from piece to piece in a multimedia environment.</p>
	
	<!--<div class="divide"></div>-->
	
	<p><em></em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<img src="images/web.jpg" alt="web marketing" />

<!--//-->
</div>
<!--end main middle-->

<!--middle top-->
<div id="top_midcol">
<!--//-->

<?php
include ('includes/recent.php');
?>

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
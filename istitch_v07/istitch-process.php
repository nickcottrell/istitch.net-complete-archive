<?php
//sets the page title
$page_title = 'studio';
//sets the keywords
$keywords = 'san diego graphic design, strategy, process, quality control, istitch';
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

	<h1>process</h1>
	<h2>point <em>a</em> to point <em>b</em></h2>
	
	<!--<p>Our process involves weaving together textures to create unity and context. We aren't afraid to get our hands dirty. We enjoy finding new and interesting ways to tell the same story. Our process allows us to solve communication problems using variety of tools and media.</p>-->
	
	<p>Projects begin step by step as we get to know our clients and begin to develop an overall strategy. Things kick in to gear as we produce individual designs. When everything is all wrapped up, we roll out the system and work out the kinks. Throughout the process, regular feedback is given by the client.  
	
	<div class="divide"></div>
	
	<p><em>We use a series of surveys to collect feedback and information from our clients at various stages of production.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<img src="images/model.jpg" alt="point a to point b" />

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
include ('includes/studio-links.php');
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
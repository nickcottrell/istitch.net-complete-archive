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

	<h1>istitch</h1>
	<h2>tailored for business</h2>
	
	<p>The design process allows us to communicate messages effectively by weaving together various textures, creating unity and context. Good design fits well and feels great because it should always address the clients' needs, goals and personality. at <em>istitch</em>, we use <em>the tailor</em> as a metaphor for this process because so much of design has to do with piecing together textures to fit a given scenario.</p>  
	
	<div class="divide"></div>
	
	<p><em><a href="index2.php">Sign up</a> for our quarterly "Con-stitch-uency" e-newsletter to get updates about how we tailor design for business.</em></p>
	
<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<img src="images/sewing.jpg" alt="point a to point b" />

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
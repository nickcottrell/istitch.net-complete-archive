<?php
//sets the page title
$page_title = 'studio';
//sets the keywords
$keywords = 'san diego graphic design, communication, graphic communication, studio';
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
	<h2>graphic communication studio</h2>
	
	<p>If you have a project, we'd love to talk about it. Low overhead allows us to keep our rates competetive so please, give us a call.</p>
	
	<p>Our services include conceptual design, graphic development, production management in print and web. If these are the services you are looking for, contact <a href="istitch-bio-nick.php">Nick</a>.</p>
	
	<div class="divide"></div>
	
	<!--<p><em>Although most of the work we do is completed in our studio, we are open to on-site collaboration with firms in and around San Diego.</em></p>-->

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<img src="images/model.jpg" alt="graphic design studio" />

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
<!-- 
	This document is a sample project page for Rachel Lattanzi's portfolio
	Author: Evan Douglass
-->
<?php
	include 'inc/head.html';
	include 'inc/nav.html';
?>

<!-- Main Photo -->
<header>
	<div class="d-flex justify-content-center" id="MainImg">
		<!--This is the Showcase image-->
		<img src="images/pexels-photo-1118866.jpeg" alt="Main Image">
	</div>
</header>
<!--/Main Photo-->

<!-- Text area -->
<div class="container">
	<section id="Text">
		<h2 class="text-center pb-1">Subject Name</h2>
		<h3 class="text-center text-uppercase">Subheading</h3>
		<div class="newspaper">
			<!--flows into two columns above sm breakpoint-->
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div> <!--/newspaper-->
	</section>
	<!--/Text area-->

	<!-- Photos -->
	<section id="Photos">

		<!-- Copy & paste this div to add another landscape photo -->
		<div class="row justify-content-center">
			<img class="Landscape" src="images/test1.jpeg" alt="Landscape Photograph">
		</div>

		<!-- Copy & paste this div to add two more portrait photos -->
		<div class="row justify-content-center">
			<img class="Portrait Left" src="images/test2.jpeg" alt="Portrait Photograph">
			<img class="Portrait Right" src="images/test2.jpeg" alt="Portrait Photograph">
		</div>

		<div class="row justify-content-center">
			<img class="Landscape" src="images/testSmall.jpeg">
		</div>

		<div class="row justify-content-center">
			<img class="Portrait Left" src="images/testSmallVert.jpeg">
			<img class="Portrait Right" src="images/testSmallVert2.jpeg">
		</div>

		<div class="row justify-content-center">
			<img class="Portrait Left" src="images/testSmall.jpeg">
			<img class="Portrait Right" src="images/testSmallVert2.jpeg">
		</div>

		<div class="row justify-content-center">
			<img class="Portrait Right" src="images/testSmallVert2.jpeg">
		</div>

		<div class="row justify-content-center">
			<img class="Portrait Left" src="images/testSmallVert2.jpeg">
		</div>
		
	</section>
	<!--/Photos-->
	
</div> <!--/container-->

<?php
	include 'inc/end.html';
?>
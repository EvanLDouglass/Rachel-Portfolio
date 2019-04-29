<!-- 
	This document is a sample project page for Rachel Lattanzi's portfolio
	Author: Evan Douglass
-->
<?php
	include 'inc/head.html';
?>

<style type="text/css">
html, body {
  overflow: hidden;
}
</style>

<!--
    Logo and Navigation Bar
    This is repeated here due to the "fixed-top" class
    for the nav tag.
-->
<nav class="navbar navbar-expand fixed-top">
<div class="container">
    <a href="./index.php" class="abs-center-x" id="Brandname">
        <h1>Rachel&nbsp;Lattanzi</h1>
    </a>
    <!-- The behavior of this section below the lg breakpoint is controlled in css. -->
    <div class="navbar-nav ml-lg-auto">
        <a class="nav-item nav-link p-3" href="work.php">Work</a>
        <span class="navbar-text py-3">|</span>
        <a class="nav-item nav-link p-3" href="#">Resume</a>
        <span class="navbar-text py-3">|</span>
        <a class="nav-item nav-link p-3" href="#">Contact</a>
    </div> <!--/navbar-nav-->
</div>
</nav>
<!--/Logo and Navigation Bar-->

<!-- Main Photo -->
<header>
	<div class="d-flex justify-content-center" id="HomeImg">
		<!--This is the responsive header image-->
        <picture>
            <!-- Small screen image goes here. -->
            <source media="(max-width: 992px)" srcset="images/test2.jpeg" alt="Main Image">
            <!-- Desktop image here. -->
            <img src="images/pexels-photo-1118866.jpeg" alt="Main Image">
        </picture>
	</div>
</header>
<!--/Main Photo-->

<?php
	include 'inc/end.html';
?>
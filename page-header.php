<?php

?>
<div id="page-header" class="bg-gradient-9">
	<div id="mobile-navigation">
		<button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
		<a href="<?php echo $rootadmin; ?>" class="logo-content-small" title="Safe Haven"></a>
	</div>
	<div id="header-logo" class="logo-bg">
		<a href="<?php echo $rootadmin; ?>" class="logo-content-big" title="Safe Haven">
			Safe Haven
			<span>The solution to digital inheritance</span>
		</a>
		<a href="<?php echo $rootadmin; ?>" class="logo-content-small" title="Safe Haven">
			Safe Haven
			<span>The solution to digital inheritance</span>
		</a>
		<a id="close-sidebar" href="#" title="Close sidebar">
			<i class="glyph-icon icon-angle-left"></i>
		</a>
	</div>
	
	<?php require_once("header-nav-left.php"); ?>
	<?php require_once("header-nav-right.php"); ?>
</div>
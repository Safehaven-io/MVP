<?php

?>
<script type="text/javascript" src="<?php echo $rootadmin; ?>js/app.js"></script>

<body>
	<div id="sb-site" ng-app="app" ng-controller="appCtrl" ng-init="userInit('<?php echo $rootadmin."','".$_SESSION['userID'];?>');">
		<div id="loading">
			<div class="spinner">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
		
		<div id="page-wrapper">			
			<?php require_once("page-header.php"); ?>
			<?php require_once("page-sidebar.php"); ?>
			<div id="page-content-wrapper">
				<div id="page-content">
					<div class="container">
						<?php require_once("theme-options.php"); ?>
						<?php include($content); ?>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<?php
	require_once("widgets.php");
	?>
</body>
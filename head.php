<?php
$title = "Safe Haven - The solution to digital inheritance - MVP";
?>
<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
	<meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title><?php echo $title; ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicons -->

	<!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $root;?>assets/images/icons/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $root;?>assets/images/icons/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $root;?>assets/images/icons/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo $root;?>assets/images/icons/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="<?php echo $root;?>assets/images/icons/favicon.png">-->
	
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $rootadmin;?>img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $rootadmin;?>img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $rootadmin;?>img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $rootadmin;?>img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $rootadmin;?>img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $rootadmin;?>img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $rootadmin;?>img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $rootadmin;?>img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $rootadmin;?>img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $rootadmin;?>img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $rootadmin;?>img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $rootadmin;?>img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $rootadmin;?>img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo $rootadmin;?>img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">



	
    <link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/bootstrap/css/bootstrap.css">


	<!-- HELPERS -->

	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/helpers/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/helpers/backgrounds.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/helpers/boilerplate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/helpers/border-radius.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/helpers/grid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/helpers/page-transitions.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/helpers/spacing.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/helpers/typography.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/helpers/utils.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/helpers/colors.css">

	<!-- ELEMENTS -->

	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/badges.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/buttons.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/content-box.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/dashboard-box.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/forms.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/images.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/info-box.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/invoice.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/loading-indicators.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/menus.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/panel-box.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/response-messages.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/responsive-tables.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/ribbon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/social-box.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/tables.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/tile-box.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/elements/timeline.css">



	<!-- ICONS -->

	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/icons/fontawesome/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/icons/linecons/linecons.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/icons/spinnericon/spinnericon.css">


	<!-- WIDGETS -->

	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/accordion-ui/accordion.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/calendar/calendar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/carousel/carousel.css">

	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/charts/justgage/justgage.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/charts/morris/morris.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/charts/piegage/piegage.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/charts/xcharts/xcharts.css">

	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/chosen/chosen.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/colorpicker/colorpicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/datatable/datatable.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/datepicker/datepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/datepicker-ui/datepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/dialog/dialog.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/dropdown/dropdown.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/dropzone/dropzone.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/file-input/fileinput.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/input-switch/inputswitch.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/input-switch/inputswitch-alt.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/ionrangeslider/ionrangeslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/jcrop/jcrop.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/jgrowl-notifications/jgrowl.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/loading-bar/loadingbar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/maps/vector-maps/vectormaps.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/markdown/markdown.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/modal/modal.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/multi-select/multiselect.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/multi-upload/fileupload.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/nestable/nestable.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/noty-notifications/noty.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/popover/popover.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/pretty-photo/prettyphoto.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/progressbar/progressbar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/range-slider/rangeslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/slidebars/slidebars.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/slider-ui/slider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/tabs-ui/tabs.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/theme-switcher/themeswitcher.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/timepicker/timepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/tocify/tocify.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/tooltip/tooltip.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/touchspin/touchspin.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/uniform/uniform.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/wizard/wizard.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/widgets/xeditable/xeditable.css">

	<!-- SNIPPETS -->

	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/snippets/chat.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/snippets/files-box.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/snippets/login-box.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/snippets/notification-box.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/snippets/progress-box.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/snippets/todo.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/snippets/user-profile.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/snippets/mobile-navigation.css">

	<!-- APPLICATIONS -->

	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/applications/mailbox.css">

	<!-- Admin theme -->

	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/themes/admin/layout.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/themes/admin/color-schemes/default.css">

	<!-- Components theme -->

	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/themes/components/default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/themes/components/border-radius.css">

	<!-- Admin responsive -->

	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/helpers/responsive-elements.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root;?>assets/helpers/admin-responsive.css">

	<!-- JS Core -->

	<script type="text/javascript" src="<?php echo $root;?>assets/js-core/jquery-core.js"></script>
	<script type="text/javascript" src="<?php echo $root;?>assets/js-core/jquery-ui-core.js"></script>
	<script type="text/javascript" src="<?php echo $root;?>assets/js-core/jquery-ui-widget.js"></script>
	<script type="text/javascript" src="<?php echo $root;?>assets/js-core/jquery-ui-mouse.js"></script>
	<script type="text/javascript" src="<?php echo $root;?>assets/js-core/jquery-ui-position.js"></script>
	<!--<script type="text/javascript" src="<?php echo $root;?>assets/js-core/transition.js"></script>-->
	<script type="text/javascript" src="<?php echo $root;?>assets/js-core/modernizr.js"></script>
	<script type="text/javascript" src="<?php echo $root;?>assets/js-core/jquery-cookie.js"></script>


	<script type="text/javascript">
		$(window).load(function(){
			setTimeout(function() {
				$('#loading').fadeOut( 400, "linear" );
			}, 300);
		});
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

</head>
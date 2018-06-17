<?php

?>
<div id="header-nav-left">
	<div class="user-account-btn dropdown">
		<a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
			<!--<img width="28" src="<?php echo $root;?>assets/image-resources/gravatar.jpg" alt="Profile image">-->
			<img width="28" src="<?php echo $rootadmin;?>users/{{user.img}}" alt="{{user.firstname}} {{user.lastname}}">
			<span>{{user.firstname}} {{user.lastname}}</span>
			<i class="glyph-icon icon-angle-down"></i>
		</a>
		<div class="dropdown-menu float-left">
			<div class="box-sm">
				<div class="login-box clearfix">
					<div class="user-img">
						<a href="#" title="" class="change-img">Change photo</a>
						<img src="<?php echo $rootadmin;?>users/{{user.img}}" alt="{{user.firstname}} {{user.lastname}}">
					</div>
					<div class="user-info">
						<span>
							{{user.firstname}} {{user.lastname}}
							<i>{{user.email}}</i>
						</span>
						<a href="#" title="Edit profile">Edit profile</a>
						<a href="#" title="View notifications">View notifications</a>
					</div>
				</div>
				<div class="divider"></div>
				<ul class="reset-ul mrg5B">
					<li>
						<a href="#">
							<i class="glyph-icon float-right icon-caret-right"></i>
							View login page example
							
						</a>
					</li>
					<li>
						<a href="#">
							<i class="glyph-icon float-right icon-caret-right"></i>
							View lockscreen example
							
						</a>
					</li>
					<li>
						<a href="#">
							<i class="glyph-icon float-right icon-caret-right"></i>
							View account details
							
						</a>
					</li>
				</ul>
				<div class="pad5A button-pane button-pane-alt text-center">
					<a href="<?php echo $rootadmin;?>logout" class="btn display-block font-normal btn-danger">
						<i class="glyph-icon icon-power-off"></i>
						Logout
					</a>
				</div>
			</div>
		</div>
	</div>
</div><!-- #header-nav-left -->
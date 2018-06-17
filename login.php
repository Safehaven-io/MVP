<?php
session_start();

include 'rootvars.php';
require_once "classes/class.users.php";

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
	header("Location: ".$rootadmin);
	exit();
}

$error = "";
if (!empty($_POST)){
	$email = htmlspecialchars($_POST["email"]);
	$password = htmlspecialchars($_POST["password"]);
	
	if ($email != "" && $password != ""){
		/*$_SESSION['loggedin'] = true;
		$_SESSION['email'] = $email;*/
		
		if($debug){
			echo "email: -".$email."-<br>";
			echo "password: -".$password."-<br>";
		}
		
		$userClass = new USER();
		$result = $userClass->validUser($email,$password);
		if($result != "false" && $result != ""){
			$_SESSION["loggedin"] = true;
			$_SESSION["userID"] = $result->ID;
			header("Location: ".$rootadmin);
			exit();
		}
		else{
			$error = "You entered wrong account details!";
		}		
	}
	else{
		$error = "Email and password are mandatory!";
	}
}
?>

<!DOCTYPE html> 
<html lang="en">
<?php
require_once("head.php");
?>

<!--<script type="text/javascript" src="<?php echo $rootadmin; ?>js/login.js"></script>-->

<style type="text/css">

    html,body {
        height: 100%;
        background: #fafafa;
    }
	
	.info{
		background: rgba(255, 255, 255, 0.5)!important;
		border-radius: 5px;
		padding-top: 10px;
		padding-bottom: 10px;
		margin-top: 10px;
		margin-left: -5px;
		margin-right: -15px;
		box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
		min-width: 340px;
	}
	
	.icon-logo{
		padding: 5px!important;
	}
	.logo{
		max-width: 50px;
		
	}

</style>
<script type="text/javascript" src="<?php echo $root;?>assets/widgets/wow/wow.js"></script>
<script type="text/javascript">
    /* WOW animations */

    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();
</script>

<body>
<?php
	echo "<img src='".$root."assets/image-resources/blurred-bg/blurred-bg-".rand(1, 15).".jpg' class='login-img wow fadeIn' alt=''>";
?>
<div class="center-vertical">
    <div class="center-content row">
        <div class="col-md-8 col-lg-6 clearfix center-margin">
            <div class="row wow bounceInDown">
                <div class="col-md-5 info">
                    <h3 class="text-transform-upr font-size-17">SAFE HAVEN Admin <span class="opacity-80">v1.0</span></h3>
                    <p class="font-white">The solution to digital inheritance</p>
                    <div class="divider"></div>
                    <ul class="reset-ul">
                        <li class="pad10A font-size-13">
                            <i class="glyph-icon icon-lock mrg10R"></i>
                            Most secure protocol for digital inheritance
                        </li>
                        <li class="pad10A font-size-13">
                            <i class="glyph-icon icon-database mrg10R"></i>
                            Fully or partial decentralized
                        </li>
                        <li class="pad10A font-size-13">
                            <i class="glyph-icon icon-gavel mrg10R"></i>
                            Secured by lawyers worldwide
                        </li>
                    </ul>
                    <div class="divider"></div>
                    Not a member yet? <a href="" class="font-white" title="Register">Click here to sign up!</a>
                    <br>
                </div>

                <div class="col-md-7">
                    <form id="login" method="post" action="" enctype="multipart/form-data" autocomplete="false">
                        <div class="content-box modal-content">
                            <h3 class="content-box-header content-box-header-alt bg-default">
                                <span class="icon-separator icon-logo">
                                    <img src="<?php echo $rootadmin;?>img/logo_safe_haven.png" class="logo">
                                </span>
                                <span class="header-wrapper">
                                    Members area
                                    <small>Use the form below to login to your account.</small>
                                </span>
                                <span class="header-buttons">
                                    <a href="#" class="btn btn-sm btn-primary" title="">Sign Up</a>
                                </span>
                            </h3>
                            <div class="content-box-wrapper">
								<div class="form-group">							
									<div class="input-group">
										<input type="email" class="form-control" name="email" placeholder="Enter email" autocomplete="false" required>
										<span class="input-group-addon bg-blue">
											<i class="glyph-icon icon-envelope-o"></i>
										</span>
									</div>
                                </div>
                                <div class="form-group">
									<div class="input-group">
										<input type="password" class="form-control" name="password" placeholder="Password" autocomplete="new-password" required>
										<span class="input-group-addon bg-blue">
											<i class="glyph-icon icon-unlock-alt"></i>
										</span>
									</div>
                                </div>
								<div class="form-group">
									<?php
										if(isset($error) && $error != ""){
											echo "<span class='font-red'>".$error."</span>";
											$error = "";
										}
									?>
                                </div>
                                <div class="form-group">
                                    <a href="" title="Recover password">Forgot Your Password?</a>
                                </div>
                                <button class="btn btn-success btn-block" ng-click="signin()">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
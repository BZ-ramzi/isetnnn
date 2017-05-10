<?php
session_start();
if (isset($_SESSION['login'])) {
  header ('Location: ../profile/');
  exit();
}

?>
<!DOCTYPE html>
<html lang="en" class="coming-soon">

<!-- Mirrored from avenxo.kaijuthemes.com/extras-forgotpassword.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Apr 2017 18:21:21 GMT -->
<head>
    <meta charset="utf-8">
    <title>Cap EXPRESS</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="Ramzi BENZAID">

    <link type="text/css" href="../assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
    <link type="text/css" href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="../assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">               <!-- Themify Icons -->
    <link type="text/css" href="../assets/css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link type="text/css" href="assets/css/ie8.css" rel="stylesheet">
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->
    
    </head>

    <body class="focused-form animated-content">
        
        
<div class="container" id="forgotpassword-form">
	<a href="index-2.html" class="login-logo"><img src="../assets/img/logo-big.png"></a>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Récupérer Mot de passe</h2>
				</div>
				<form action="scripts/forgot_pwd.php" class="form-horizontal">
				<div class="panel-body">
					
						<div class="form-group mb-n">
	                        <div class="col-xs-12">
	                        	<p>Entrer votre mail pour récupérer votre mot de passe</p>
	                        	<div class="input-group">							
									<span class="input-group-addon">
										<i class="ti ti-user"></i>
									</span>
									<input type="email" class="form-control" required placeholder="Adresse Email">
								</div>
	                        </div>
						</div>
					
				</div>
				<div class="panel-footer">
					<div class="clearfix">
						<a href="../login/" class="btn btn-default pull-left">Retour</a>
						
						<button class="btn btn-primary pull-right">Envoyer</button>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

    
    
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script type="text/javascript" src="../assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="../assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script type="text/javascript" src="../assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->

<script type="text/javascript" src="../assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="../assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script type="text/javascript" src="../assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script type="text/javascript" src="../assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="../assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->

<script type="text/javascript" src="../assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="../assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->

<script type="text/javascript" src="../assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script type="text/javascript" src="../assets/js/application.js"></script>
<script type="text/javascript" src="../assets/demo/demo.js"></script>
<script type="text/javascript" src="../assets/demo/demo-switcher.js"></script>

<!-- End loading site level scripts -->
    <!-- Load page level scripts-->
    
    <!-- End loading page level scripts-->
    </body>

<!-- Mirrored from avenxo.kaijuthemes.com/extras-forgotpassword.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Apr 2017 18:21:21 GMT -->
</html>
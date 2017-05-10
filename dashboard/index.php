<?php 
/*
session_start();
if (!isset($_SESSION['access'])) {
  header ('Location: ../');
  exit();
}
*/

if(isset($_GET['out'])) {
	// destroy session
	session_unset();
	$_SESSION = array();
	unset($_SESSION['user'],$_SESSION['access']);
	session_destroy();
	header ('Location: ../login/');
}

 ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from avenxo.kaijuthemes.com/ui-tiles.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Apr 2017 18:18:17 GMT -->
<head>
    <meta charset="utf-8">
    <title>ISETN</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Ramzi BENZAID">
    <meta name="author" content="isetn">


    <link type="text/css" href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="../assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">              <!-- Themify Icons -->
    <link type="text/css" href="../assets/css/styles.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link type="text/css" href="../assets/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="../assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->
   <link rel="icon" type="image/x-icon" href="../assets/img/favicon/fav.png" />
    <!--[if lt IE 10]>
        <script type="text/javascript" src="../assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="../assets/js/respond.min.js"></script>
        <script type="text/javascript" src="../assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
 

    </head>

    <body class="animated-content">
        
        <header id="topnav" class="navbar navbar-teal navbar-fixed-top" role="banner">

	<div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
			</a>
		</span>
		
		<a class="navbar-brand" href="#">isetn</a>

    
	</div><!-- logo-area -->


	<ul class="nav navbar-nav toolbar pull-right">

	<li class="toolbar-icon-bg hidden-xs">
            <a href="http://www.isetn.rnu.tn/" target="_blank"><span class="icon-bg"><i class="ti ti-world"></i></span></a>
        </li>


  <li class="toolbar-icon-bg hidden-xs">
            <a href="#"><span class="icon-bg"><i class="ti ti-view-grid"></i></span></i></a>
        </li>

		
		 <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="ti ti-fullscreen"></i></span></i></a>
        </li>


      
       
 
 
 
 
		
	
		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
				<img class="img-circle" src="../assets/demo/avatar/avatar_15.png" alt="" />
			</a>
			<ul class="dropdown-menu userinfo arrow">
				<li><a href="../profile/"><i class="ti ti-user"></i><span>Profile</span></a></li>
				<li><a href="../resetpassword/"><i class="ti ti-settings"></i><span>Changer mot de passe</span></a></li>
			
				
				<li class="divider"></li>
				<li><a href="?out"><i class="ti ti-shift-right"></i><span>Se déconnecter</span></a></li>
			</ul>
		</li>

	</ul>

</header>

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-default">
                    <div class="static-sidebar">
                        <div class="sidebar">
	
	
	
	<div class="widget stay-on-collapse" id="widget-sidebar">
        <nav role="navigation" class="widget-body">
	<ul class="acc-menu">
		<li class="nav-separator"></li>
		<li><a href="../dashboard/"><i class="ti ti-home"></i><span>Dashboard</span></a></li>

		<li class="nav-separator"><span>Services de base</span></li>
		
						<li><a href="../elearning/"><i class="ti ti-book"></i><span>E-learning</span></a></li>

		<li><a href="#search"><i class="ti ti-email"></i><span>E-mail</span></a>
			
		</li>
				<li><a href="../telephonie/"><i class="ti ti-tablet"></i><span>Téléphonie IP</span></a></li>

				<li class="nav-separator"><span>Services en Click</span></li>

				<li><a href="../hebergement/"><i class="ti ti-upload"></i><span>Hébergement</span></a></li>
				<li><a href="../telechargement/"><i class="ti ti-zip"></i><span>Téléchargement</span></a></li>
				<li><a href="../bureau/"><i class="ti ti-desktop"></i><span>Bureau Virtuel</span></a></li>

				<li class="nav-separator"><span>Cloud Computing</span></li>

		<li><a href="../cloud/"><i class="ti ti-cloud"></i><span>Cloud Computing</span></a>
			
		</li>
      
      <li class="nav-separator"><span>Gestion de Compte</span></li>

	  <li><a href="javascript:;"><i class="ti ti-user"></i><span>Mon compte</span></a>
			<ul class="acc-menu">
				<li><a href="../profile/">Profile</a></li>
				<li><a href="../resetpassword/">Changer mot de passe</a></li>
				<li><a href="?out">Se déconnecter</a></li>
					
			</ul>
		</li>
		
	
	<br>
		

		
	</ul>
</nav>
    </div>

  
</div>
                    </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
<li><a href="#">Home</a></li>
<li><a href="#">Dashboard</a></li>


                            </ol>
                            <div class="container-fluid">
							
							
							
							
                                
<div class="row">

	<div class="col-md-3">
		<div class="info-tile tile-success" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
			
									 <div class="tile-heading"><span>E-learning</span> </div>

			<div><center><img src="../img/elearning.png" width="125px"></center></div>
			<div class="tile-footer"><span class="text-primary"><a href="../elearning/">Plus détail</a> <i class="fa fa-level-down"></i></span></div>

		</div>
	</div>
	
	
		<div class="col-md-3">
		<div class="info-tile tile-success" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
			
									 <div class="tile-heading"><span>E-mail</span> </div>

			<div><center><img src="../img/mail.png" width="125px"></center></div>
			<div class="tile-footer"><span class="text-primary"><a href="../mail/">Plus détail</a> <i class="fa fa-level-down"></i></span></div>

		</div>
	</div>
	
	
	<div class="col-md-3">
		<div class="info-tile tile-success" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
			
									 <div class="tile-heading"><span>Téléphonie IP</span> </div>

			<div><center><img src="../img/voip.png" width="125px"></center></div>
			<div class="tile-footer"><span class="text-primary"><a href="../telephonie/">Plus détail</a> <i class="fa fa-level-down"></i></span></div>

		</div>
	</div>



		<div class="col-md-3">
		<div class="info-tile tile-success" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
			
									 <div class="tile-heading"><span>Hébergement</span> </div>

			<div><center><img src="../img/hebergement.png" width="125px"></center></div>
			<div class="tile-footer"><span class="text-primary"><a href="../hebergement/">Plus détail</a> <i class="fa fa-level-down"></i></span></div>

		</div>
	</div>



		<div class="col-md-3">
		<div class="info-tile tile-success" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
			
									 <div class="tile-heading"><span>Téléchargement</span> </div>

			<div><center><img src="../img/telechargement.png" width="125px"></center></div>
			<div class="tile-footer"><span class="text-primary"><a href="../telechargement/">Plus détail</a> <i class="fa fa-level-down"></i></span></div>

		</div>
	</div>



		<div class="col-md-3">
		<div class="info-tile tile-success" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
			
									 <div class="tile-heading"><span>Bureau Virtuel</span> </div>

			<div><center><img src="../img/bureau.png" width="125px"></center></div>
			<div class="tile-footer"><span class="text-primary"><a href="../bureau/">Plus détail</a> <i class="fa fa-level-down"></i></span></div>

		</div>
	</div>



		<div class="col-md-3">
		<div class="info-tile tile-success" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
			
									 <div class="tile-heading"><span>Cloud Computing</span> </div>

			<div><center><img src="../img/cloud.png" width="125px"></center></div>
			<div class="tile-footer"><span class="text-primary"><a href="../cloud/">Plus détail</a> <i class="fa fa-level-down"></i></span></div>

		</div>
	</div>


	
	

	
</div>





	





                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;">Made with <span class="fa fa-heart"></span> by <a href="#" target="_blank">Centre Informatique</a></h6></li>
        </ul>
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
    </div>
</footer>


                </div>
            </div>
        </div>


  
   
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->


<script type="text/javascript" src="../assets/js/jquery-1.10.2.min.js"></script> 	


<script type="text/javascript" src="../assets/js/js.js"></script> 	


						<!-- Load jQuery -->
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

<!-- Mirrored from avenxo.kaijuthemes.com/ui-tiles.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Apr 2017 18:18:17 GMT -->
</html>
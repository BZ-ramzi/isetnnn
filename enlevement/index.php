

<?php
session_start();
if (!isset($_SESSION['login'])) {
  header ('Location: ../');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from avenxo.kaijuthemes.com/ui-tiles.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Apr 2017 18:18:17 GMT -->
<head>
    <meta charset="utf-8">
    <title>Cap EXPRESS</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Cap EXPRESS">
    <meta name="author" content="Ramzi BENZAID">


    <link type="text/css" href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="../assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">              <!-- Themify Icons -->
    <link type="text/css" href="../assets/css/styles.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link type="text/css" href="../assets/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="../assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->

    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    
     <style type="text/css">
        	

#search {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    
    -webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	-ms-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;

    -webkit-transform: translate(0px, -100%) scale(0, 0);
	-moz-transform: translate(0px, -100%) scale(0, 0);
	-o-transform: translate(0px, -100%) scale(0, 0);
	-ms-transform: translate(0px, -100%) scale(0, 0);
	transform: translate(0px, -100%) scale(0, 0);
    
    opacity: 0;
}

#search.open {
    -webkit-transform: translate(0px, 0px) scale(1, 1);
    -moz-transform: translate(0px, 0px) scale(1, 1);
	-o-transform: translate(0px, 0px) scale(1, 1);
	-ms-transform: translate(0px, 0px) scale(1, 1);
	transform: translate(0px, 0px) scale(1, 1); 
    opacity: 1;
}

#search input[type="search"] {
    position: absolute;
    top: 50%;
    width: 100%;
    color: rgb(255, 255, 255);
    background: rgba(0, 0, 0, 0);
    font-size: 60px;
    font-weight: 300;
    text-align: center;
    border: 0px;
    margin: 0px auto;
    margin-top: -51px;
    padding-left: 30px;
    padding-right: 30px;
    outline: none;
}
#search .btn {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: 61px;
    margin-left: -45px;
  	background-color: limegreen;
  border: black;

}
#search .close {
    position: fixed;
    top: 15px;
    right: 15px;
    color: #fff;
	background-color: limegreen;
	border-color: green;
	opacity: 1;
	padding: 10px 17px;
	font-size: 27px;
}
        </style>

    </head>

    <body class="animated-content">
        
        <header id="topnav" class="navbar navbar-orange navbar-fixed-top" role="banner">

	<div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
			</a>
		</span>
		
		<a class="navbar-brand" href="#">Cap EXPRESS</a>

    
	</div><!-- logo-area -->


	<ul class="nav navbar-nav toolbar pull-right">

  <li class="toolbar-icon-bg hidden-xs">
            <a href="../dashboard/"><span class="icon-bg"><i class="ti ti-view-grid"></i></span></i></a>
        </li>

		
		 <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="ti ti-fullscreen"></i></span></i></a>
        </li>


		<li class="toolbar-icon-bg hidden-xs">
            <a href="#" target="_blank"><span class="icon-bg"><i class="ti ti-new-window"></i></span></i></a>
        </li>

      
       
 
 
 
 
		
	
		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
				<img class="img-circle" src="../assets/demo/avatar/avatar_15.png" alt="" />
			</a>
			<ul class="dropdown-menu userinfo arrow">
				<li><a href="../profile/"><i class="ti ti-user"></i><span>Profile</span></a></li>
				<li><a href="../resetpassword/"><i class="ti ti-settings"></i><span>Changer mot de passe</span></a></li>
			
				
				<li class="divider"></li>
				<li><a href="../disconnect/"><i class="ti ti-shift-right"></i><span>Se déconnecter</span></a></li>
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
		
						<li><a href="#search"><i class="ti ti-target"></i><span>Tracking</span></a></li>

		<li><a href="javascript:;"><i class="ti ti-dashboard"></i><span>Bordereaux en attente</span></a>
			<ul class="acc-menu">
				<li><a href="../ajout-bordereau/">Ajouter bordereau</a></li>
				<li><a href="../listes-bordereaux/">Mes bordereaux</a></li>
					
			</ul>
		</li>
				<li><a href="../enlevement/"><i class="ti ti-check"></i><span>Bordereaux enlevé</span></a></li>
				<li><a href="../livraison/"><i class="ti ti-truck"></i><span>Bordereaux livré</span></a></li>
				<li><a href="../annulation/"><i class="ti ti-back-left"></i><span>Annulation</span></a></li>
				<li><a href="../payement/"><i class="fa fa-money"></i><span>Bordereaux payé</span></a></li>

		<li><a href="javascript:;"><i class="ti ti-alert"></i><span>Réclamations</span></a>
			<ul class="acc-menu">
				<li><a href="../ajout-reclamation/">Ajouter réclamation</a></li>
				<li><a href="../listes-reclamations/">Mes réclamations</a></li>
					
			</ul>
		</li>
      
	  <li><a href="javascript:;"><i class="ti ti-user"></i><span>Mon compte</span></a>
			<ul class="acc-menu">
				<li><a href="../profile/">Profile</a></li>
				<li><a href="../resetpassword/">Changer mot de passe</a></li>
				<li><a href="../disconnect/">Se déconnecter</a></li>
					
			</ul>
		</li>
		
	
	
		

		
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
<li><a href="#">Bordereaux enlevé</a></li>


                            </ol>
                            <div class="container-fluid">
							
							
							
							
                                
<div class="row">

			
			

</div>




                                







                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;">Made with <span class="fa fa-heart"></span> by <a href="https://www.facebook.com/ramzibenzaeid" target="_blank">ramzi benzaid</a></h6></li>
        </ul>
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
    </div>
</footer>

                </div>
            </div>
        </div>

        
<div id="search">

    <button type="button" class="close">×</button>
   <form action="../tracking" method="POST">
        <input type="search" value="" placeholder="Entrer le code de bordereau" />
        <button type="submit" class="btn btn-primary">Tracking</button>
    </form>
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
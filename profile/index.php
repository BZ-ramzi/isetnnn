<?php 
session_start();
if (!isset($_SESSION['access'])) {
  header ('Location: ../');
  exit();
}


if(isset($_GET['out'])) {
	// destroy session
	session_unset();
	$_SESSION = array();
	unset($_SESSION['user'],$_SESSION['access']);
	session_destroy();
	header ('Location: /ldap/');
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
    <meta name="description" content="isetn">
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
		
		<a class="navbar-brand" href="#">isetn</a>

    
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
				<img class="img-circle" src="../assets/logo/<?php echo $row_row_profile['src_logo']; ?>" alt="" />
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
				<li><a href="?out">Se déconnecter</a></li>
					
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
<li><a href="#">Profile</a></li>


                            </ol>
      
                            <div class="container-fluid">
                                 
<div data-widget-group="group1">
	<div class="row">
		<div class="col-sm-3">
			<div class="panel panel-profile">
			  <div class="panel-body">
			    <img src="../assets/logo/<?php echo $row_row_profile['src_logo']; ?>" class="img-circle">
			    <div class="name"><?php echo $row_row_profile['entreprise']; ?></div>
			    <div class="info"><?php echo $row_row_profile['matricule_fiscale']; ?></div>
			
			  </div>
			</div><!-- panel -->
			<div class="list-group list-group-alternate mb-n nav nav-tabs">
				<a href="#tab-about" 	role="tab" data-toggle="tab" class="list-group-item active"><i class="ti ti-user"></i> A propos <span class="badge badge-primary">80%</span></a>
								<a href="#tab-logo" 	role="tab" data-toggle="tab" class="list-group-item"><i class="ti ti-camera"></i> Changer logo</a>

				<a href="#tab-edit" 	role="tab" data-toggle="tab" class="list-group-item"><i class="ti ti-pencil"></i> Edit</a>
			</div>
		</div><!-- col-sm-3 -->
		<div class="col-sm-9">
			<div class="tab-content">
			

				<div class="tab-pane active" id="tab-about">
					<div class="panel panel-default">
					    <div class="panel-heading">
					    	<h2>A propos</h2>
					    </div>
						<div class="panel-body">
					      
							<div class="about-area">
						      	<h4>Informations de base</h4>
								    <div class="table-responsive">
								      <table class="table">
								        <tbody>
										  <tr>
								            <th>Code entreprise</th>
								            <td><a href="#"><?php echo $row_row_profile['code']; ?></a></td>
								          </tr>
								          <tr>
								            <th>Matricule fiscale</th>
								            <td><a href="#"><?php echo $row_row_profile['matricule_fiscale']; ?></a></td>
								          </tr>
								          <tr>
								            <th>Entreprise</th>
								            <td><a href="#"><?php echo $row_row_profile['entreprise']; ?></a></td>
								          </tr>
										  <tr>
								            <th>Statut juridique</th>
								            <td><a href="#"><?php echo $row_row_profile['statut_juridique']; ?></a></td>
								          </tr>
								          <tr>
								            <th>Téléphone</th>
								            <td><?php echo $row_row_profile['tel']; ?></td>
								          </tr>
										   <tr>
								            <th>E-mail</th>
								            <td><?php echo $row_row_profile['email']; ?></td>
								          </tr>
								          <tr>
								            <th>Adresse</th>
								            <td><?php echo $row_row_profile['adresse']; ?></td>
								          </tr>
								         
								         
								        </tbody>
								      </table>
								    </div>
							</div>
							<div class="about-area">
						      	<h4>Informations de responsable </h4>
								    <div class="table-responsive">
								      <table class="table about-table">
								        <tbody>
								          <tr>
								            <th>Nom complet</th>
								            <td><?php echo $row_row_responsable['nom_complet']; ?></td>
								          </tr>
								          <tr>
								            <th>Téléphone</th>
								            <td><?php echo $row_row_responsable['tel']; ?></td>
								          </tr>
										  <tr>
								            <th>E-mail</th>
								            <td><?php echo $row_row_responsable['email']; ?></td>
								          </tr>
								       
								          
								        </tbody>
								      </table>
								    </div>
							</div>
							
							<div class="about-area">
						      	<h4>Informations de compte </h4>
								    <div class="table-responsive">
								      <table class="table about-table">
								        <tbody>
								          <tr>
								            <th>Date de création</th>
								            <td><?php echo $row_row_profile['date_creation']; ?></td>
								          </tr>
								        
								       
								          
								        </tbody>
								      </table>
								    </div>
							</div>
							
							
						</div>
					</div>
				</div>

			
				
				
				<div class="tab-pane" id="tab-edit">
					<div class="panel">
						<div class="panel-heading">
							<h2>Edit</h2>
						</div>
						<div class="panel-body">
						
						
						<div class="about-area">
						<form action="../scripts/update_entreprise.php" method="post" >
						      	<h4>Informations de base</h4>
								    <div class="table-responsive">
								      <table class="table">
								        <tbody>
										
								          <tr>
								            <th>Matricule fiscale</th>
								            <td>
											
											<input type="text" name="id_ent" value="<?php echo $row_row_profile['id_entreprise']; ?>" style="display:none;">
											
											<input type="text" name="matricule" value="<?php echo $row_row_profile['matricule_fiscale']; ?>" class="form-control"></td>
								          </tr>
								          <tr>
								            <th>Entreprise</th>
								            <td><input type="text" name="entreprise" value="<?php echo $row_row_profile['entreprise']; ?>" class="form-control"></td>
								          </tr>
										  <tr>
								            <th>Statut juridique</th>
								            <td><input type="text" name="statut" value="<?php echo $row_row_profile['statut_juridique']; ?>" class="form-control"></td>
								          </tr>
										  
										  
								          <tr>
								            <th>Téléphone</th>
								            <td><input type="text" name="tel" value="<?php echo $row_row_profile['tel']; ?>" class="form-control"></td>
								          </tr>
										  
										   <tr>
								            <th>E-mail</th>
								            <td><input type="text" name="mail" value="<?php echo $row_row_profile['email']; ?>" class="form-control"></td>
								          </tr>
										  
								          <tr>
								            <th>Adresse</th>
								            <td><input type="text" name="adresse" value="<?php echo $row_row_profile['adresse']; ?>" class="form-control"></td>
								          </tr>
								         
								         
								        </tbody>
								      </table>
							
									
						
							    </div>
							 </div>
							<div class="panel-footer">
								<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<button class="btn-primary btn">Update</button>
									
								</div>
							    </div>
								
								</div>
									</form>
					
							<br>
					
				
							<div class="about-area">
							
							<form action="../scripts/update_responsable.php" method="post"  >
							
						      	<h4>Informations de responsable </h4>
								    <div class="table-responsive">
								      <table class="table about-table">
								        <tbody>
								          <tr>
								            <th>Nom complet</th>
								            <td>
											
											<input type="text" name="id_ent" style="display:none;" value="<?php echo $row_row_profile['id_entreprise']; ?>">
											
											<input type="text" name="nom" value="<?php echo $row_row_responsable['nom_complet']; ?>" class="form-control"></td>
								          </tr>
								          <tr>
								            <th>Téléphone</th>
								            <td><input type="text" name="tel" value="<?php echo $row_row_responsable['tel']; ?>" class="form-control"></td>
								          </tr>
								        <tr>
								            <th>E-mail</th>
								            <td><input type="text" name="mail" value="<?php echo $row_row_responsable['email']; ?>" class="form-control"></td>
								          </tr>
								       
								          
								        </tbody>
								      </table>
								    </div>
							</div>
							
							
						
						
						
						<div class="panel-footer">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<button class="btn-primary btn">Update</button>
									
								</div>
							</div>
						</div>
						
						</form>
						</div>
					</div>
				</div>
				
				
				
						<div class="tab-pane" id="tab-logo">
					<div class="panel panel-default">
					    <div class="panel-heading">
					    	<h2>Changer logo</h2>
					    </div>
						<div class="panel-body">
						
					    <form action="../scripts/update_logo.php" method="post" enctype="multipart/form-data" >

								 <div class="table-responsive">
								      <table class="table">
								        <tbody>
										
										    <tr>
								            <th>Logo</th>
								            <td>
											<input type="text" name="id_ent" value="<?php echo $row_row_profile['id_entreprise']; ?>" style="display:none;" >
											<input type="file" name="photo" class="form-control" ></td>
								          </tr>
										  
								          
								         
								        </tbody>
								      </table>
							
									</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<button class="btn-primary btn">Update</button>
									
								</div>
							</div>
						</div>
						
						</form>
						
						</div>
					</div>
				</div>





			</div><!-- .tab-content -->
		</div><!-- col-sm-8 -->
	</div>
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
    
<script type="text/javascript" src="../assets/plugins/form-fseditor/jquery.fseditor-min.js"></script>            			<!-- Fullscreen Editor -->
<script type="text/javascript" src="../assets/plugins/bootbox/bootbox.js"></script> 	<!-- Bootbox -->

<script type="text/javascript" src="../assets/demo/demo-profile.js"></script>

    <!-- End loading page level scripts-->

    </body>

<!-- Mirrored from avenxo.kaijuthemes.com/extras-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Apr 2017 18:21:18 GMT -->
</html>
<?php
mysql_free_result($row_profile);

mysql_free_result($row_responsable);
?>
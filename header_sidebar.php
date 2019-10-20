<html lang="en">
	<head>
	<title>Infinit TV</title>
    <meta name="robots" content="noindex">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    	
        <!-- third party css -->
        <link href="assets/libs/jquery-nice-select/nice-select.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/treeview/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/nestable2/jquery.nestable.min.css" rel="stylesheet" />
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />
		
    <link rel="stylesheet" href="assets/yz/css/waves.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/yz/css/feather.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/yz/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/yz/css/dark.css">


</head>

<body class="logged-in loaded">

	   	
	<div id="pcoded" class="pcoded iscollapsed" theme-layout="vertical" vertical-placement="left" vertical-layout="wide" pcoded-device-type="desktop" vertical-nav-type="expanded" vertical-effect="shrink" vnavigation-view="view1" nav-type="st1" sidebar-img="false" sidebar-img-type="img1" layout-type="light">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
           
		   <!-- [ Header ] start -->
            <nav class="navbar header-navbar pcoded-header iscollapsed" header-theme="themelight1" pcoded-header-position="fixed">
                <div class="navbar-wrapper">

                    <div class="navbar-logo" logo-theme="theme1">
                        <a href="<?php if ($rPermissions["is_reseller"]) { ?>reseller.php<?php } if ($rPermissions["is_admin"]) { ?>dashboard.php"<?php } ?>">
                            <img class="img-fluid" style="width:130px" src="assets/images/logo.png" alt="Streaminy-Logo"> 
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="javascript:void(0">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">

                        <ul class="nav-right">
							<li></li>
						<?php if (($rServerError) && ($rPermissions["is_admin"] == 1)) { ?>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                         <a href="./server.php">
											<i class="icon feather icon-layers"></i>
										 </a>
                                    </div>
                                </div>
                            </li>
						<?php } ?>
						<?php if ($rPermissions["is_reseller"] == 1) { ?>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle">
                                         <a href="#">
											<i class="fe-dollar-sign text-info icon"></i><?=number_format($rUserInfo["credits"], 0)?>
										 </a>
                                    </div>
                                </div>
                            </li>
						<?php } ?>
						<?php if ($rPermissions["is_admin"] == 1) { ?>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle">
                                         <a href="./settings.php">
											<i class="icon feather icon-settings"></i>
										 </a>
                                    </div>
                                </div>
                            </li>
						<?php } ?>
							<li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle">
											<a href="./logout.php">
												<i class="feather icon-log-out"></i>
											</a>
                                    </div>

                                </div>
                            </li>					
														
														
														
											
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- [ navigation menu ] start -->
                    <nav class="pcoded-navbar" navbar-theme="themelight1" active-item-theme="theme3" sub-item-theme="theme2" active-item-style="style0" pcoded-navbar-position="fixed">
						<div class="nav-list">
								<div class="pcoded-inner-navbar main-menu" style="overflow: hidden; width: 100%; height: 100%;">
                                <div class="pcoded-navigation-label" menu-title-theme="theme9">Xtream-UI</div>
                                <ul class="pcoded-item pcoded-left-item" item-border="false" item-border-style="" subitem-border="false">
                                    <li class="active pcoded-hasmenu pcoded-trigger" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="<?php if ($rPermissions["is_reseller"]) { ?>reseller.php<?php } if ($rPermissions["is_admin"]) { ?>#"<?php } ?>" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
										
                                    
									<?php if ($rPermissions["is_admin"]) { ?>
										<ul class="pcoded-submenu" style="display: block;">
                                          <li class="active">
                                                <a href="./live_connections.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Live Connections</span>
                                                </a>
                                            </li>										
                                            <li class="">
                                                <a href="./user_activity.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Activity Logs</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Client Logs</span>
                                                </a>
                                            </li>
											<li class="">
												<a href="#" class="waves-effect waves-dark">
													<span class="pcoded-micon"><i class="feather icon-menu"></i></span>
													<span class="pcoded-mtext">Stream Logs</span>
												</a>
											</li>	
											<li class="">
												<a href="./mag_events.php" class="waves-effect waves-dark">
													<span class="pcoded-micon"><i class="feather icon-menu"></i></span>
													<span class="pcoded-mtext">Manage MAG Events</span>
												</a>
											</li>											
                                        </ul>
										<?php } ?>
                                </ul>
								</li>
                                <div class="pcoded-navigation-label" menu-title-theme="theme9">Streaming</div>
                                <ul class="pcoded-item pcoded-left-item" item-border="false" item-border-style="" subitem-border="false">
                                 
								<?php if ($rPermissions["is_reseller"]) { ?>
									<li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                            <span class="pcoded-mtext">Connections</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                          <li class="">
                                                <a href="./live_connections.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Live Connections</span>
                                                </a>
                                            </li>										
                                            <li class="">
                                                <a href="./user_activity.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Activity Logs</span>
                                                </a>
                                            </li>
										</ul>
									</li>	
								 <?php }
									if ($rPermissions["is_admin"]) { ?>
									<li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                            <span class="pcoded-mtext">Server</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                          <li class="">
                                                <a href="./servers.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Server</span>
                                                </a>
                                            </li>										
                                            <li class="">
                                                <a href="./server.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add Server</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="./install_server.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Install Load Balancer</span>
                                                </a>
                                            </li>
											
                                        </ul>										
                                    </li>                                   

									<li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                                            <span class="pcoded-mtext">Streams</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                          <li class="">
                                                <a href="./streams.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Stream</span>
                                                </a>
                                            </li>										
                                            <li class="">
                                                <a href="./stream.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add Stream</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="./stream.php?import" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Import Stream</span>
                                                </a>
                                            </li>	
											<li class="">
												<a href="./stream_categories.php" class="waves-effect waves-dark">
													<span class="pcoded-micon"><i class="feather icon-menu"></i></span>
													<span class="pcoded-mtext">Stream Category</span>
												</a>
											</li>
											<li class="">
												<a href="./epgs.php" class="waves-effect waves-dark">
													<span class="pcoded-micon"><i class="feather icon-menu"></i></span>
													<span class="pcoded-mtext">EPG</span>
												</a>
											</li>	
											
                                        </ul>										
                                    </li>
									 <?php }
											?>
                                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-user"></i></span>
                                            <span class="pcoded-mtext">Lines</span>
                                        </a>
                                        <ul class="pcoded-submenu">
										<?php if (($rPermissions["is_reseller"]) && ($rPermissions["total_allowed_gen_trials"] > 0)) { ?>
											<li class="">
                                                <a href="./user_reseller.php?trial" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Generate Trial</span>
                                                </a>
                                            </li>
										<?php } ?>	
											<li class="">
                                                <a href="./users.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Lines</span>
                                                </a>
                                            </li>	
											<li class="">
                                                <a href="./user<?php if ($rPermissions["is_reseller"]) { echo "_reseller"; } ?>.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add Line</span>
                                                </a>
                                            </li>
										<?php if ($rPermissions["is_admin"]) { ?>
											<li class="">
                                                <a href="./reg_user.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add Users</span>
                                                </a>
                                            </li>
											<li class="">
                                                <a href="./reg_users.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Users</span>
                                                </a>
                                            </li>
											<li class="">
                                                <a href="./groups.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Groups</span>
                                                </a>
                                            </li>											
										<?php } ?>												
                                        </ul>										
                                    </li>
									
									<?php if ($rPermissions["is_admin"]) { ?>
                                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-camera"></i></span>
                                            <span class="pcoded-mtext">Movies</span>
                                        </a>
                                        <ul class="pcoded-submenu">
											<li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Movies</span>
                                                </a>
                                            </li>										
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add Movie</span>
                                                </a>
                                            </li>											
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Movies Category</span>
                                                </a>
                                            </li>										
                                        </ul>										
                                    </li>	

                                     <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-video"></i></span>
                                            <span class="pcoded-mtext">Series</span>
                                        </a>
                                        <ul class="pcoded-submenu">
											<li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Series</span>
                                                </a>
                                            </li>	
											<li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add Serie</span>
                                                </a>
                                            </li>											
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Episodes</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Serie Category</span>
                                                </a>
                                            </li>										
                                        </ul>										
                                    </li> 
									
                                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-droplet"></i></span>
                                            <span class="pcoded-mtext">Bouquets</span>
                                        </a>
                                        <ul class="pcoded-submenu">
											<li class="">
                                                <a href="./bouquets.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Bouquets</span>
                                                </a>
                                            </li>	
											<li class="">
                                                <a href="./bouquet.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add Bouquet</span>
                                                </a>
                                            </li>																					
                                        </ul>										
                                    </li>	
	                                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-pocket"></i></span>
                                            <span class="pcoded-mtext">Packages</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="./packages.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Packages</span>
                                                </a>
                                            </li>											
											<li class="">
												<a href="./package.php" class="waves-effect waves-dark">
													<span class="pcoded-mtext">Add Packages</span>
												</a>
											</li>											
                                        </ul>										
                                    </li>

									<li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
                                            <span class="pcoded-mtext">Transcoding</span>
                                        </a>
                                        <ul class="pcoded-submenu">
											<li class="">
                                                <a href="./profiles.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Profiles</span>
                                                </a>
                                            </li>	
											<li class="">
                                                <a href="/profile.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add Profile</span>
                                                </a>
                                            </li>										
                                        </ul>										
                                    </li>
									
									<li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-save"></i></span>
                                            <span class="pcoded-mtext">Recording</span>
                                        </a>
                                        <ul class="pcoded-submenu">
											<li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Archives</span>
                                                </a>
                                            </li>											
                                        </ul>										
                                    </li>
																		 <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-user-plus"></i></span>
                                            <span class="pcoded-mtext">Subresellers</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                          <li class="">
                                                <a href="./subresellers.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Subresellers</span>
                                                </a>
                                            </li>											
                                            <li class="">
                                                <a href="./subreseller_setup.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Setup Subreseller</span>
                                                </a>
                                            </li>										
                                        </ul>										
                                    </li>
                                <?php } ?>
								

								</ul>
																	 <?php if (($rPermissions["is_reseller"]) && ($rPermissions["create_sub_resellers"])) { ?>
                                <div class="pcoded-navigation-label" menu-title-theme="theme9">Dealer</div>

								<ul class="pcoded-item pcoded-left-item" item-border="false" item-border-style="" subitem-border="false">
                                     
									 <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-user-plus"></i></span>
                                            <span class="pcoded-mtext">Subresellers</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                          <li class="">
                                                <a href="./reg_users.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Subreseller</span>
                                                </a>
                                            </li>											
                                            <li class="">
                                                <a href="./subreseller.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add Subreseller</span>
                                                </a>
                                            </li>										
                                        </ul>										
                                    </li> 
									
																		
                                </ul>
								<?php } ?>
                                <div class="pcoded-navigation-label" menu-title-theme="theme9">Plugins</div>
								<ul class="pcoded-item pcoded-left-item" item-border="false" item-border-style="" subitem-border="false">
									<?php if (($rPermissions["is_reseller"]) && ($rPermissions["reset_stb_data"])) { ?>									
									<li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-trash"></i></span>
                                            <span class="pcoded-mtext">Content</span>
                                        </a>
                                        <ul class="pcoded-submenu">
											<li class="">
                                                <a href="./streams.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Streams</span>
                                                </a>
                                            </li>											
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Movies</span>
                                                </a>
                                            </li>	
											<li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Series</span>
                                                </a>
                                            </li>											
                                        </ul>										
                                    </li>
									<?php } ?>
                                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-cloud"></i></span>
                                            <span class="pcoded-mtext">Devices</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                          <?php 
										  if ($rPermissions["is_reseller"]) { ?>
										  <li class="">
                                                <a href="./mags.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage MAG Devices</span>
                                                </a>
                                            </li>											
                                            <li class="">
                                                <a href="./enigmas.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Enigma Devices</span>
                                                </a>
                                            </li>
											<li class="">
                                                <a href="./user<?php if ($rPermissions["is_reseller"]) { echo "_reseller"; } ?>.php?mag" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add MAG Devices</span>
                                                </a>
                                            </li>											
                                            <li class="">
                                                <a href="./user<?php if ($rPermissions["is_reseller"]) { echo "_reseller"; } ?>.php?e2" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add Enigma Devices</span>
                                                </a>
                                            </li>
											<?php }
												if ($rPermissions["is_admin"]) { ?>
                                             <li class="">
                                                <a href="./user<?php if ($rPermissions["is_reseller"]) { echo "_reseller"; } ?>.php?mag" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add MAG Devices</span>
                                                </a>
                                            </li>											
                                            <li class="">
                                                <a href="./user<?php if ($rPermissions["is_reseller"]) { echo "_reseller"; } ?>.php?e2" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add Enigma Devices</span>
                                                </a>
                                            </li>
											<li class="">
                                                <a href="./mag.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Link MAG Devices</span>
                                                </a>
                                            </li>											
                                            <li class="">
                                                <a href="./enigma.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Link Enigma Devices</span>
                                                </a>
                                            </li>
											 <li class="">
                                                <a href="./mags.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage MAG Devices</span>
                                                </a>
                                            </li>											
                                            <li class="">
                                                <a href="./enigmas.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Enigma Devices</span>
                                                </a>
                                            </li>
											<?php } ?>									
                                        </ul>										
                                    </li>									
                                </ul>
                                <div class="pcoded-navigation-label" menu-title-theme="theme9">Other</div>
								<ul class="pcoded-item pcoded-left-item" item-border="false" item-border-style="" subitem-border="false">
                                   <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                                            <span class="pcoded-mtext">Support</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                          <?php if (($rPermissions["is_reseller"]) && ($rPermissions["reset_stb_data"])) { ?>
										  <li class="">
                                                <a href="./ticket.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Create Ticket</span>
                                                </a>
                                            </li>											
                                            <li class="">
                                                <a href="./tickets.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Manage Tickets</span>
                                                </a>
                                            </li>
											<?php }
												if ($rPermissions["is_admin"]) { ?>
                                             <li class="">
                                                <a href="./tickets.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Tickets</span>
                                                </a>
                                            </li>	
																					
                                        </ul>										
                                    </li>
                                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style5">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-zap"></i></span>
                                            <span class="pcoded-mtext">About</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                          <li class="">
                                            <div class="pcoded-mtext">Copyright &copy; 2019 - <a href="https://xtream-ui.com">Xtream UI</a> R8 - Theme Created by YZ</div>
                                            </li>											
                                        </ul>										
                                    </li>	
										<?php } ?>										
                                </ul>
								<div class="clearfix"></div>								
                            </div>
						<div class="clearfix"></div>
								<div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.5); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 88.36px;"></div>
								<div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
							</div>
                        
						
						</div>
				  </nav>
                    <!-- [ navigation menu ] end -->
                   
					
                
                <!-- [ style Customizer ] start -->
                <!-- [ style Customizer ] end -->

				<div class="pcoded-content">
					<div class="pcoded-inner-content">
					<!-- Main-body start -->
						<div class="main-body">

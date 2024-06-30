<?php 

	require '../config/bdd.php';
    extract($_POST);
    if(isset($inscription)){
        $prenom=htmlspecialchars($prenom);
        if(empty($prenom) || empty($nom) || empty($telephone) || empty($password)){
            $errors="Tous les champs sont obligatoire";
        }else
		{
			$pdo=bdd();
			$verif=$pdo->PREPARE("SELECT telephone FROM users where telephone=?");
			$verif->execute([$telephone]);
			if($verif->rowCount()>0)
			{
				$errors="Ce numero de telephone existe deja";
			}else
			{
				$insert=$pdo->PREPARE("INSERT INTO users(prenom,nom,telephone,password) VALUES(?,?,?,?)");
				$insert->execute([$prenom,$nom,$telephone,sha1($password)]);
				header('Location:login.php');
			}




        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <meta name="description" content="Spruha - PHP Admin Panel Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="php dashboard, php template, admin dashboard bootstrap, bootstrap admin theme, admin, php admin panel, bootstrap admin template, admin dashboard template, admin template bootstrap, php admin dashboard, dashboard template, dashboard template bootstrap, bootstrap admin, admin panel template, dashboard">
        
        <!-- TITLE -->
        <title>IST-Social network</title>

        <!-- FAVICON -->
        <link rel="icon" href="https://php.spruko.com/spruha/spruha/assets/img/brand/favicon.ico">

        
		<!-- BOOTSTRAP CSS -->
		<link  id="style" href="../assets/auth/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- ICONS CSS -->
		<link href="../assets/auth/plugins/web-fonts/icons.css" rel="stylesheet">
		<link href="../assets/auth/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
		<link href="../assets/auth/plugins/web-fonts/plugin.css" rel="stylesheet">

		<!-- STYLE CSS -->
		<link href="../assets/auth/css/style.css" rel="stylesheet">
		<link href="../assets/auth/css/plugins.css" rel="stylesheet">

		<!-- SWITCHER CSS -->
		<link href="../assets/auth/switcher/css/switcher.css" rel="stylesheet">
		<link href="../assets/auth/switcher/demo.css" rel="stylesheet">
        

    </head>

    <body class="ltr main-body leftmenu error-1">

        <!-- SWITCHER -->
        
		<div class="switcher-wrapper">
			<div class="demo_changer">
				<div class="form_holder sidebar-right1">
					<div class="row">
						<div class="predefined_styles">
							<div class="swichermainleft text-center">
								<div class="p-3 d-grid gap-2">
									<a href="index.html" target="_blank" class="btn btn-primary rounded-10 mt-0">View Demo</a>
									<a href="https://1.envato.market/MGEaN" target="_blank"
										class="rounded-10 btn btn-secondary">Buy Now</a>
									<a href="https://1.envato.market/MGEaN" target="_blank"
										class="rounded-10 btn btn-info">Our Portfolio</a>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>LTR and RTL Versions</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">LTR</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch7"
													id="myonoffswitch19" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch19" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">RTL</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch7"
													id="myonoffswitch20" class="onoffswitch2-checkbox">
												<label for="myonoffswitch20" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft menu-styles">
								<h4>Navigation Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Vertical Menu</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch01"
													id="myonoffswitch01" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch01" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Horizontal Click Menu</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch01"
													id="myonoffswitch02" class="onoffswitch2-checkbox">
												<label for="myonoffswitch02" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Horizontal Hover Menu</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch01"
													id="myonoffswitch03" class="onoffswitch2-checkbox">
												<label for="myonoffswitch03" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Light Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Theme</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch1"
													id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch1" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Light Primary</span>
											<div class="">
												<input class="wd-30 ht-30 input-color-picker color-primary-light"
													value="#6259ca" id="colorID" oninput="changePrimaryColor()" type="color"
													data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
													data-id7="transparentcolor" name="lightPrimary">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Dark Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Dark Theme</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch1"
													id="myonoffswitch2" class="onoffswitch2-checkbox">
												<label for="myonoffswitch2" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Primary</span>
											<div class="">
												<input class="wd-30 ht-30 input-dark-color-picker color-primary-dark"
													value="#6259ca" id="darkPrimaryColorID" oninput="darkPrimaryColor()"
													type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
													data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft menu-colors">
								<h4>Menu Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle lightMenu d-flex">
											<span class="me-auto">Light Menu</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch2"
													id="myonoffswitch3" class="onoffswitch2-checkbox">
												<label for="myonoffswitch3" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle colorMenu d-flex mt-2">
											<span class="me-auto">Color Menu</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch2"
													id="myonoffswitch4" class="onoffswitch2-checkbox">
												<label for="myonoffswitch4" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle darkMenu d-flex mt-2">
											<span class="me-auto">Dark Menu</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch2"
													id="myonoffswitch5" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch5" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft header-colors">
								<h4>Header Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle lightHeader d-flex">
											<span class="me-auto">Light Header</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch3"
													id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch6" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle  colorHeader d-flex mt-2">
											<span class="me-auto">Color Header</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch3"
													id="myonoffswitch7" class="onoffswitch2-checkbox">
												<label for="myonoffswitch7" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle darkHeader d-flex mt-2">
											<span class="me-auto">Dark Header</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch3"
													id="myonoffswitch8" class="onoffswitch2-checkbox">
												<label for="myonoffswitch8" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft layout-width-style">
								<h4>Layout Width Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Full Width</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch4"
													id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch9" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Boxed</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch4"
													id="myonoffswitch10" class="onoffswitch2-checkbox">
												<label for="myonoffswitch10" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft layout-positions">
								<h4>Layout Positions</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Fixed</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch5"
													id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch11" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Scrollable</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch5"
													id="myonoffswitch12" class="onoffswitch2-checkbox">
												<label for="myonoffswitch12" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft vertical-switcher">
								<h4>Sidemenu layout Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Default Menu</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch6"
													id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
												<label for="myonoffswitch13" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Icon with Text</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch6"
													id="myonoffswitch14" class="onoffswitch2-checkbox">
												<label for="myonoffswitch14" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Icon Overlay</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch6"
													id="myonoffswitch15" class="onoffswitch2-checkbox">
												<label for="myonoffswitch15" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Closed Sidemenu</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch6"
													id="myonoffswitch16" class="onoffswitch2-checkbox">
												<label for="myonoffswitch16" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Hover Submenu</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch6"
													id="myonoffswitch17" class="onoffswitch2-checkbox">
												<label for="myonoffswitch17" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Hover Submenu Style 1</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch6"
													id="myonoffswitch18" class="onoffswitch2-checkbox">
												<label for="myonoffswitch18" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Reset All Styles</h4>
								<div class="skin-body">
									<div class="switch_section my-4">
										<button class="btn btn-danger btn-block" onclick="localStorage.clear();
											document.querySelector('html').style = '';
											names() ;
											resetData();" type="button">Reset All
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- END SWITCHER -->
        
        <!-- LOADEAR -->
		<div id="global-loader">
			<img src="https://php.spruko.com/spruha/spruha/assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- END LOADEAR -->

        <!-- END PAGE -->

        <div class="page main-signin-wrapper">
        
            <!-- SWITCHER-ICON CODE -->
            <div class="d-flex header-setting-icon demo-icon fa-spin">
				<a class="nav-link icon" href="javascript:void(0)">
					<i class="fe fe-settings settings-icon "></i>
				</a>
			</div>
            <!-- SWITCHER-ICON CODE -->

            


			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-5 pt-4 p-2 pos-absolute">
									<img src="../assets/auth/img/brand/logo-light.png" class="header-brand-img mb-4" alt="logo">
									<div class="clearfix"></div>
									<img src="https://php.spruko.com/spruha/spruha/assets/img/svgs/user.svg" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">Create Your Account</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="main-container container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="../assets/auth/img/brand/logo-light.png" class="d-lg-none header-brand-img text-start float-start mb-4 error-logo-light" alt="logo">
											<img src="../assets/auth/img/brand/logo.png" class=" d-lg-none header-brand-img text-start float-start mb-4 error-logo" alt="logo">
											<div class="clearfix"></div>
											<form method="POST" action="">
												<h5 class="text-start mb-2">Creation de compte</h5>
                                                <?php if(isset($errors)) :?>
                                                <div class="alert bg-danger">
                                                    <?php echo $errors;?>
                                                </div>
                                                <?php endif; ?>
												<p class="mb-4 text-muted tx-13 ms-0 text-start">Signin to create, discover and connect with the global community</p>
												<div class="form-group text-start">
													<label>Prenom</label>
													<input name="prenom" value="<?php if(isset($prenom)) echo $prenom; ?>" class="form-control"  type="text">
												</div>
                                                <div class="form-group text-start">
													<label>Nom</label>
													<input name="nom" class="form-control" value="<?php if(isset($nom)) echo $nom; ?>"  type="text">
												</div>
                                                <div class="form-group text-start">
													<label>Telephone</label>
													<input name="telephone" class="form-control" value="<?php if(isset($telephone)) echo $telephone; ?>" type="text">
												</div>
												<div class="form-group text-start">
													<label>Mot de passe</label>
													<input name="password" class="form-control" type="password">
												</div>
												<button name="inscription" class="btn btn-main-primary btn-block text-white">Inscription</button>
											</form>
											<div class="text-start mt-5 ms-0">
												
												<div>Vous avez un compte ? <a href="login.php">Se connecter ici</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->


        </div>
		<!-- END PAGE -->

        <!-- SCRIPTS -->
        		
		<!-- JQUERY JS -->
		<script src="../assets/auth/plugins/jquery/jquery.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="../assets/auth/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../assets/auth/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- PERFECT SCROLLBAR JS -->
		<script src="../assets/auth/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!-- SELECT2 JS -->
		<script src="../assets/auth/plugins/select2/js/select2.min.js"></script>
		<script src="../assets/auth/js/select2.js"></script>
        

        
        <!-- COLOR THEME JS -->
		<script src="../assets/auth/js/themeColors.js"></script>

        <!-- CUSTOM JS -->
        <script src="../assets/auth/js/custom.js"></script>

        <!-- SWITCHER JS -->
        <script src="../assets/auth/switcher/js/switcher.js"></script>

        <!-- END SCRIPTS -->

    </body>

<!-- Mirrored from php.spruko.com/spruha/spruha/pages/signin.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Aug 2023 17:21:20 GMT -->
</html>

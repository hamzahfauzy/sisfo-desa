<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title><?=$this->title;?></title>
<?php
foreach($this->vendor as $key => $val){
	if($key == "css"){
		foreach($val as $value){
			echo "<link href='$value' type='text/css' rel='stylesheet'>\n";
		}
	}
}
?>
</head>
<body>
<header>
			
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
							<ul class="top_nav_menu">
									<li class="account">
					                  <ul class="account_selection">
					                    <li><a href="<?=URL;?>/auth"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</a></li>
					                  </ul>
				                	</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
							<a href="<?= URL ?>">
								<img class="img-fluid" src="<?=URL;?>/vendor/assets/img/logo.png" alt="">
							</a>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
							<img class="img-fluid" src="<?=URL;?>/vendor/assets/img/banner-ad.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="<?= URL ?>">Home</a></li>
							<li><a href="<?= URL ?>/index/berita">Berita</a></li>
							<li class="menu-has-children"><a href="<?= URL ?>/index/category">Category</a>
							<ul>
								<?php foreach ($category->data as $key => $value): ?>
									<li><a href="<?= URL ?>/category"><?= $value->nama_category ?></a></li>
								<?php endforeach ?>
							</ul>
							<li><a href="<?= URL ?>/index/download">Download</a></li>
						</li>
					</ul>
					</nav><!-- #nav-menu-container -->
					<div class="navbar-right">
						<form class="Search">
							<input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
							<label for="Search-box" class="Search-box-label">
								<span class="lnr lnr-magnifier"></span>
							</label>
							<span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
						</form>
					</div>
				</div>
			</div>
		</header>
		
		<div class="site-main-container">
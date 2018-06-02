<?php use libs\Session; ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title><?=$this->title;?></title>
<link rel="stylesheet" type="text/css" href="<?= URL ?>/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?= URL ?>/vendor/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Sisfo Desa</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="<?= URL ?>/admin">Home</a></li>
					<li><a href="<?= URL ?>/admin/berita">Manajemen Berita</a></li>
					<li><a href="<?= URL ?>/admin/category">Manajemen Category</a></li>
					<li><a href="<?= URL ?>/admin/berkas">Manajemen Berkas</a></li>
				</ul>
				<?php if(Session::get("admin")): ?>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?= URL?>/auth/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
					</ul>
				<?php endif ?>
			</div>
		</div>
	</nav>
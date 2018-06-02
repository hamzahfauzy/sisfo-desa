
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">Image Post</h1>
								<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="#">Post Types </a><span class="lnr lnr-arrow-right"></span><a href="image-post.html">Image Post </a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
								<div class="feature-img-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="<?= URL ?>/<?= $gambar($model->beritaID)->file_path ?>" alt="">
								</div>
								<div class="content-wrap">
									<ul class="tags mt-10">
										<li><a href="#"><?= $model->category ?></a></li>
									</ul>
									<a href="#">
										<h3><?= $model->judul_berita ?></h3>
									</a>
									<ul class="meta pb-20">
										<li><a href="#"><span class="lnr lnr-user"></span>Admin</a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span><?= $model->berita_updated ?></a></li>
									</ul>
									<p>
										<?= $model->isi_berita ?>
									</p>
								
								<div class="navigation-wrap justify-content-between d-flex">
									<a class="prev" href="#"><span class="lnr lnr-arrow-left"></span>Prev Post</a>
									<a class="next" href="#">Next Post<span class="lnr lnr-arrow-right"></span></a>
								</div>
							</div>
						</div>
						<!-- End single-post Area -->
					</div>
					<div class="col-lg-4">
						<div class="sidebars-area">
							<div class="single-sidebar-widget editors-pick-widget">
								<h6 class="title">Kategori</h6>
								<?php foreach ($category->data as $key => $value): ?>
									<h6 class="title"><?= $value->nama_category ?></h6>
								<?php endforeach ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->

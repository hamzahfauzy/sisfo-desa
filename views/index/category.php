			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12 post-list">
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<?php foreach ($category->data as $key => $value): ?>
									<p></p>
									<h4 class="cat-title"><?= $value->nama_category ?></h4>
									<?php if (!$berita($value->nama_category)->length): ?>
										<p></p>
										<h2>Tidak ada Berita</h2>
										<p></p>
									<?php else: ?>
										<?php foreach ($berita($value->nama_category)->data as $key => $value): 
											$baru = $gambar($value->beritaID);
											?>
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="<?= URL?>/<?= $baru->file_path ?>" alt="">
										</div>
											<ul class="tags">
												<li><a href="#"><?= $value->category ?></a></li>
											</ul>
										
									</div>
									<div class="col-lg-7 post-right">
										<a href="<?= URL ?>/index/detail?id=<?=$value->beritaID  ?>">
											<h4><?= $value->judul_berita ?></h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span>Admin</a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?= $value->berita_updated  ?></a></li>
										</ul>
										<p class="excert">
											<?= $value->isi_berita ?>
										</p>
									</div>
								</div>

								<?php endforeach ?>
								<?php endif ?>
							<?php endforeach ?>

							</div>
							<!-- End latest-post Area -->
						</div>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
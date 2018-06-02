<div class="container">
		<div class="panel">
				<div class="page-header">
					<h2>Manajemen Berita</h2>
				</div>
			<div class="panel-body">
				<button class="btn btn-primary" onclick="location='<?= URL?>/admin/berita?action=tambah'"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button>
				<br><br>
				<table class="table table-bordered">
					<tr>
						<?php foreach ($label as $key => $value): ?>
							<th><?= $value ?></th>
						<?php endforeach ?>
					</tr>
					<?php foreach ($model->data as $key => $value):?>
					<tr>
							<td><?= $value->judul_berita ?></td>
							<td><?= $value->berita_updated ?></td>
							<td>
								<a href="<?= URL ?>/admin/berita?action=detail&param=<?= $value->beritaID ?>">Detail</a> |
								<a href="<?= URL ?>/admin/berita?action=ubah&param=<?= $value->beritaID ?>">Ubah</a> |
								<a href="<?= URL ?>/admin/berita?action=hapus&param=<?= $value->beritaID ?>">Hapus</a>
						
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
</div>
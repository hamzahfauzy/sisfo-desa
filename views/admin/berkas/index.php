<div class="container">
		<div class="panel">
				<div class="page-header">
					<h2>Manajemen Berkas</h2>
				</div>
			<div class="panel-body">
				<button class="btn btn-primary" onclick="location='<?= URL?>/admin/berkas?action=tambah'"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button>
				<br><br>
				<table class="table table-bordered">
					<tr>
						<?php foreach ($label as $key => $value): ?>
							<th><?= $value ?></th>
						<?php endforeach ?>
					</tr>
					<?php foreach ($model->data as $key => $value):?>
					<tr>
							<td><?= $value->berkasID ?></td>
							<td><?= $value->nama_file ?></td>
							<td>
								<a href="<?= URL ?>/admin/berkas?action=hapus&param=<?= $value->berkasID ?>">Hapus</a>
							</td>
						
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
</div>
<div class="container">
		<div class="panel">
				<div class="page-header">
					<h2>Manajemen Category</h2>
				</div>
			<div class="panel-body">
				<button class="btn btn-primary" onclick="location='<?= URL?>/admin/category?action=tambah'"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button>
				<br><br>
				<table class="table table-bordered">
					<tr>
						<?php foreach ($label as $key => $value): ?>
							<th><?= $value ?></th>
						<?php endforeach ?>
					</tr>
					<?php foreach ($model->data as $key => $value):?>
					<tr>
							<td><?= $value->categoryID ?></td>
							<td><?= $value->nama_category ?></td>
							<td>
								<a href="<?= URL ?>/admin/category?action=ubah&param=<?= $value->categoryID ?>">Ubah</a> |
								<a href="<?= URL ?>/admin/category?action=hapus&param=<?= $value->categoryID ?>">Hapus</a>
						
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
</div>
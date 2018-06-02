<br><br>
<div class="container">
		<div class="panel">
				<div class="page-header">
					<h2>Download Berkas</h2>
				</div>
			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<?php foreach ($label as $key => $value): ?>
							<th><?= $value ?></th>
						<?php endforeach ?>
					</tr>
					<?php foreach ($model->data as $key => $value):?>
					<tr>
							<td><?= $value->nama_file ?></td>
							<td>
								<a href="<?= URL ?>/<?= $value->file_path ?>">Download</a>
							</td>
						
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
</div>
<div class="container">
	<div class="panel">
		<div class="page-header">
			<h2>Detail Berita</h2>
		</div>
		<div class="panel-body">
			<table class="table">
				<?php foreach ($model->data as $key => $value):?>
					<tr>
						<th><?= $key ?></th>
						<th> : </th>
						<td><?= $value ?></td>
					</tr>
				<?php endforeach ?>
			</table>

			<h2>Upload gambar</h2>

			<form action="<?=URL?>/admin/berita?action=upload" method="post" enctype="multipart/form-data">

				<input type="hidden" name="gambarID" value="">
				<input type="hidden" name="beritaID" value="<?= $model->beritaID ?>">
				<input required="" type="file" name="file_path"><br>
				<button class="btn btn-success">Upload</button><br><br>	
				
			</form>
			<h2>Gambar</h2>
			<div class="container">
				<div class="row">
                   <?php foreach ($gambar->data as $key => $value): ?>
                    <div class="col-sm-3">
                        <img src="<?=URL;?>/<?=$value->file_path;?>" width="100%" height="250">
                        <form method="post" action="<?= URL;?>/admin/berita?action=hapusgambar">
                            <input type="hidden" name="gambarID" value="<?= $value->gambarID ?>">
                            <button class="btn btn-danger btn-block">Hapus</button>
                        </form>
                    </div>

                   <?php endforeach;?>
               </div>
              </div><br><br>
			<button class="btn btn-default" onclick="location='<?= URL ?>/admin/berita'">Kembali</button>
		</div>
	</div>
	
</div>
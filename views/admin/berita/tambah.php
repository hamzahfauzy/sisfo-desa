<div class="container">
	<div class="panel">
			<div class="page-header">
				<h2>Tambah Berita</h2>
			</div>
		<div class="panel-body">
			<form method="post">
				<input type="hidden" name="beritaID" value="">
				<label>Category</label>
				<select class="form-control" name="category">
					<?php foreach ($category->data as $key => $value): ?>
						<option value="<?= $value->nama_category ?>"><?= $value->nama_category ?></option>
					<?php endforeach ?>
				</select>
				<label>Judul Berita</label>
				<input type="text" required="" name="judul_berita" class="form-control">
				<label>Isi Berita</label>
				<textarea rows="10" class="form-control" required="" name="isi_berita"></textarea>
				<input type="hidden" value="CURRENT_TIMESTAMP" name="berita_updated" required="" class="form-control">
				<p></p>
				<button class="btn btn-success">Tambah</button>
				<button type="button" class="btn btn-info" onclick="location='<?= URL?>/admin/berita'">Kembali</button>
			</form>
				
		</div>
	</div>
</div>
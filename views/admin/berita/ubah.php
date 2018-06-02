<div class="container">
	<div class="panel">
			<div class="page-header">
				<h2>Ubah Berita</h2>
			</div>
		<div class="panel-body">
			<form method="post">
					<label>Kategori</label>
					<select class="form-control" name="categoryID">
					<?php foreach ($category->data as $key => $value): ?>
						<option value="<?= $value->categoryID ?>"><?= $value->nama_category ?></option>
					<?php endforeach ?>
					</select>
					<label>Judul Berita</label>
					<input type="text" name="judul_berita" value="<?= $model->judul_berita ?>" class="form-control">
					<label>Isi Berita</label>
					<textarea rows="10" class="form-control" name="isi_berita"><?= $model->isi_berita ?></textarea>
					<input type="hidden" value="CURRENT_TIMESTAMP" name="berita_updated" class="form-control">
					<p></p>
					<button class="btn btn-success">Ubah</button>
					<button class="btn btn-info" onclick="location='<?= URL?>/admin/berita'">Kembali</button>
			</form>
				
		</div>
	</div>
</div>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
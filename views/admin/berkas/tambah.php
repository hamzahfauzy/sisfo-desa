<div class="container">
	<div class="panel">
			<div class="page-header">
				<h2>Tambah Berkas</h2>
			</div>
		<div class="panel-body">
			<form method="post" enctype="multipart/form-data" action="<?= URL ?>/admin/berkas?action=tambah">
				<input type="hidden" name="categoryID" value="">
				<label>Nama File</label>
				<input type="text" name="nama_file" class="form-control">
				<label>File</label>
				<input type="file" name="file_path">
				<p></p>
				<button class="btn btn-success">Tambah</button>
				<button class="btn btn-info" onclick="location='<?= URL?>/admin/category'">Kembali</button>
			</form>
				
		</div>
	</div>
</div>
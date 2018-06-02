<div class="container">
	<div class="panel">
			<div class="page-header">
				<h2>Tambah Category</h2>
			</div>
		<div class="panel-body">
			<form method="post">
				<input type="hidden" name="categoryID" value="">
				<label>Nama Category</label>
				<input type="text" name="nama_category" class="form-control"><br><br>
				<button class="btn btn-success">Tambah</button>
				<button class="btn btn-info" onclick="location='<?= URL?>/admin/category'">Kembali</button>
			</form>
				
		</div>
	</div>
</div>
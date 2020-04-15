<div class="container-fluid">
	<h3><i class="btn-primary btn-sm" class="fas fa-edit"></i>EDIT DATA BARANG</h3>

	<?php foreach($barang as $brg) : ?>
	<!-- Modal -->
	<div class="modal fade" id="edit_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="<?php echo base_url(). 'admin/data_barang/update' ?>" method="post" >

	        	<div class="form-group">
	        		<label>Nama Barang</label>
	        		<input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>" >
	        	</div>

	        	<div class="form-group">
	        		<label>Keterangan</label>
	        		<input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
	        		<input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
	        	</div>

	        	<div class="form-group">
	        		<label>Kategori</label>
	        		<input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
	        	</div>

	        	<div class="form-group">
	        		<label>Harga</label>
	        		<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
	        	</div>

	        	<div class="form-group">
	        		<label>Stok</label>
	        		<input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
	        	</div>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>

	     </form>
	     
	    </div>
	  </div>
	</div>

	<?php endforeach; ?>
</div>
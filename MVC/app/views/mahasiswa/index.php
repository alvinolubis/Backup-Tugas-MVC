<div class="container mt-3">

<!-- Flash Msg -->
	<div class="row">
		<div class="col-lg-6">
			<?php FLasher::flash() ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			
			<br><br>
			<h3>Daftar Mahasiswa</h3>
		<!-- Button Tambah Data -->
			<button type="button" class="btn btn-primary mb-2 mt-3 tombolTambahData" data-toggle="modal" data-target="#formModal">
				Tambah Data Mahasiswa
			</button>
		<!-- List Group  -->
			<ul class="list-group">
			  <?php foreach( $data['mhs'] as $mhs ) : ?>
			   <li class="list-group-item">
			   		<?= $mhs['nama'];?>
			   <!-- Delete -->
				   <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Anda akan menghapus data Mahasiswa ini, dan tidak ada cara untuk mengembalikannya, apakah Anda yakin?');">Delete</a>
				<!-- //Edit  -->
				   <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Edit</a>
				<!-- Detail -->
				   <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-secondary float-right ml-1">Detail</a>
			   </li>
			  <?php endforeach; ?>
			</ul>

		</div>
	</div>

</div>


<!-- Form Tambah Mahasiswa -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		
	  <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
	  <div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" id="nama" name="nama">
		</div>

		<div class="form-group">
			<label for="nrp">NRP</label>
			<input type="number" class="form-control" id="nrp" name="nrp">
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>

		<div class="form-group">
			<label for="jurusan">Jurusan</label>
			<select class="form-control" id="jurusan" name="jurusan">
			<option value="Teknik Informatika">Teknik Informatika</option>
			<option value="Teknik Mesin dan Dirgantara">Teknik Mesin dan Dirgantara</option>
			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
			<option value="Seni Rupa dan Desain">Seni Rupa dan Desain</option>
			<option value="Bisnis dan Manajemen">Bisnis dan Manajemen</option>
			<option value="Arsitektur, Perencanaan dan Pengembangan Kebijakan">Arsitektur, Perencanaan dan Pengembangan Kebijakan</option>
			</select>
		</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-success">Tambah Data</button>
		</form>
      </div>
    </div>
  </div>
</div>
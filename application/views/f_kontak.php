
   				 <!-- Header -->
<section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="form-signin-heading">Masukkan Data Baru</h2>
                </div>
            </div>
				<!-- header -->

	<form action="<?php echo base_url(). 'kontak/tambah_aksi'; ?>" method="post">
	
				<!-- -->
		<table style="margin:20px auto;">
		<h4>Nama lengkap :</h4>
        <label for="inputNama" class="sr-only">Nama Lengkap</label>
        <input type="text" name="nama_pengurus" id="inputNama" class="form-control" placeholder="Nama Lengkap" required autofocus>
        <br>

        <h4>Telepon :</h4>
        <label for="inputNama" class="sr-only">Telepon</label>
        <input type="text" name="telepon" class="form-control" placeholder="Telepon" required autofocus>
        <br>

        <h4>Alamat :</h4>
        <label for="inputNama" class="sr-only">Alamat</label>
        <input type="text" name="alamat" id="inputNama" class="form-control" placeholder="Alamat" required autofocus>
        <br>

        <h4>Keterangan :</h4>
        <label for="inputNama" class="sr-only">Keterangan</label>
        <input type="text" name="keterangan" id="inputNama" class="form-control" placeholder="keterangan" required autofocus>
        <br>

		<td><button class="btn btn-lg btn-primary" type="submit">Tambah<span class=" glyphicon glyphicon-ok-circle"></span></button></td>

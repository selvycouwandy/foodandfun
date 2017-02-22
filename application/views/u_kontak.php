<section id="services">
	<center>
		<h1>Edit planning</h1>
        <br><br>
	</center>
	<?php foreach($kontak as $u){ ?>
	<form action="<?php echo base_url(). 'admin_kontak/update'; ?>" method="post">
		<div class="col-md-6 col-md-push-4">
            <div class="bs-example">
            <fieldset>
                <div class="form-group">
                    <label class="col-lg-2 control-label">nama</label>
                    <div class="col-lg-5">
                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                        <input required="required" type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>">
                    </div>
                </div><br><br>

                <div class="form-group">
                    <label class="col-lg-2 control-label">telp</label>
                    <div class="col-lg-5">
                        <input required="required" type="text" name="telp" class="form-control" value="<?php echo $u->telp ?>">
                    </div>
                </div><br><br>

                <div class="form-group">
                    <label class="col-lg-2 control-label">alamat</label>
                    <div class="col-lg-5">
                        <input required="required" type="text" name="alamat" class="form-control" value="<?php echo $u->alamat ?>">
                    </div>
                </div><br><br>

                <div class="form-group">
                    <label class="col-lg-2 control-label">ket</label>
                    <div class="col-lg-5">
                        <input required="required" type="text" name="ket" class="form-control" value="<?php echo $u->ket ?>">
                    </div>
                </div><br><br>

                <div class="col-lg-3 col-lg-offset-3">
                    <button type="submit" class="btn btn-primary" value="Simpan">Ubah</button>
                </div>

            </fieldset>
            </div>
        </div>
    </form>

	<?php } ?>
</section>
<section id="services">
	<center>
		<h1>Edit planning</h1>
        <br><br>
	</center>
	<?php foreach($resep as $u){ ?>
	<form action="<?php echo base_url(). 'admin_resep/update'; ?>" method="post">
		<div class="col-md-6 col-md-push-4">
            <div class="bs-example">
            <fieldset>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Nama</label>
                    <div class="col-lg-5">
                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                        <input required="required" type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>">
                    </div>
                </div><br><br>

                <div class="form-group">
                    <label class="col-lg-2 control-label">Link</label>
                    <div class="col-lg-5">
                        <input required="required" type="text" name="link" class="form-control" value="<?php echo $u->link ?>">
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
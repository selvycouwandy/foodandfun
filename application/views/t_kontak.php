<section id="services">
    <center>
        <h1>masukkan data baru</h1>
    </center><br><br>
    <form action="<?php echo base_url(). 'admin_kontak/tambah_aksi'; ?>" method="post">
        <div class="col-md-6 col-md-push-4">
            <div class="bs-example">
            <fieldset>
                <div class="form-group">
                    <h4><label class="col-lg-2 control-label">Nama Lengkap</label></h4>
                    <div class="col-lg-5">
                        <input required="required" type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                </div>
                
                <br>
                <br>

                <div class="form-group">
                    <h4><label class="col-lg-2 control-label">telepon</label></h4>
                    <div class="col-lg-5">
                        <input required="required" type="text" name="telp" class="form-control" placeholder="Telepon">
                </div>

                <br>
                <br>                

                <div class="form-group">
                    <h4><label class="col-lg-2 control-label">alamat</label></h4>
                    <div class="col-lg-5">
                        <input required="required" type="text" name="alamat" class="form-control" placeholder="Alamat">
                </div>

                <br>
                <br>

                <div class="form-group">
                    <h4><label class="col-lg-2 control-label">Jabatan</label></h4>
                    <div class="col-lg-5">
                        <input required="required" type="text" name="ket" class="form-control" placeholder="Jabatan">
                </div>

                <br>
                <br>

                <div class="col-lg-3 col-lg-offset-3">    
                <button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>

                
                </div>
            </fieldset>
            </div>
        </div>
    </form>

    <br>
</section>
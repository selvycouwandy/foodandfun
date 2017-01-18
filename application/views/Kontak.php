
    <!-- Header -->
<section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="form-signin-heading">Contact Pengurus</h2>
                </div>
            </div>

<br>
<br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th><center> Nama Pengurus </center></th>
        <th><center> Telepon </center></th>
        <th><center> Alamat </center></th>
        <th><center> Keterangan </center></th>
        <th><center>  </center></th>

      </tr>

    <?php 
    $no = 1;
    foreach($pengurus as $u){ 
    ?>
    <tr>
      <td><?php echo $u->nama_pengurus ?></td>
      <td><?php echo $u->telepon ?></td>
      <td><?php echo $u->alamat ?></td>
      <td><?php echo $u->keterangan ?></td>
      <td>
              <?php echo anchor('kontak/hapus/'.$u->id_pengurus,'Hapus'); ?>
      </td>
    </tr>

    <?php } ?>
    </thead>
    
  </table>

<center><a href="f_kontak"><button type="button" class="btn btn-primary" data-dismiss="modal">Tambah Contact</button></a>





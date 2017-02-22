<br><br><br>
    <div class="container">

   		<div class="col-md-12 row text-left">
          <h2 class="text-center">Daftar resep <span class=" glyphicon glyphicon-flag"></span></h2> <br>
          <table class="table">
            <thead>
            <tr>
              <th>Nama masakan</th>
              <th>Link resep</th> 
              <th>Ubah</th>             
            </tr>
            </thead>
              <tbody>
              	<?php foreach($resep as $u){ ?>
                <tr>
                  <td><?php echo $u->nama ?></td>
                  <td><a href="<?php echo $u->link ?>" target="_blank"><?php echo $u->link ?></td>
                  <td>
                    <?php echo anchor('admin_resep/edit/'.$u->id,'Edit'); ?>
                       <?php echo anchor('admin_resep/hapus/'.$u->id,'Hapus'); ?>
                  </td>
                </tr>
              <?php } ?>          
                  <div class="text-center">
                    <a href="admin_resep/tambah"><button class="btn btn-primary">Tambah resep</button></a>
                </div>  

              </tbody>

            </table>
        </div>

    </div>
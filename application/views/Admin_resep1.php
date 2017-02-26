<br><br><br>
    <div class="container">

   		<div class="col-md-12 row text-left">
          <h2 class="text-center">Daftar resep <span class=" glyphicon glyphicon-flag"></span></h2> <br>
          <table class="table">
            <thead>
            <tr>
              <th>Nama masakan</th> 
              <th>Alat dan Bahan</th> 
              <th>Cara Membuat</th>             
            </tr>
            </thead>
              <tbody>
              	<?php foreach($resep1 as $u){ ?>
                <tr>
                  <td><?php echo $u->nama ?></td>
                  <td><?php echo $u->alat_bahan ?></td>
                  <td><?php echo $u->cara_membuat ?></td>
                  
                  <td>
                    <?php echo anchor('admin_resep1/edit/'.$u->id,'Edit'); ?>
                       <?php echo anchor('admin_resep1/hapus/'.$u->id,'Hapus'); ?>
                  </td>
                </tr>
              <?php } ?>          
                  <div class="text-center">
                    <a href="admin_resep1/tambah2"><button class="btn btn-primary">Tambah resep</button></a>
                </div>  

              </tbody>

            </table>
        </div>

    </div>
<br><br><br>
    <div class="container">

   		<div class="col-md-12 row text-left">
          <h2 class="text-center">kontak<span class=" glyphicon glyphicon-flag"></span></h2> <br>
          <table class="table">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Telepon</th>   
              <th>Alamat</th>  
              <th>Keterangan</th> 
              <th>Ubah</th>             
            </tr>
            </thead>
              <tbody>
              	<?php foreach($kontak as $u){ ?>
                <tr>
                  <td><?php echo $u->nama ?></td>
                  <td><?php echo $u->telp ?></td>
                  <td><?php echo $u->alamat ?></td>
                  <td><?php echo $u->ket ?></td>
                  <td>
                    <?php echo anchor('admin_kontak/edit/'.$u->id,'Edit'); ?> <br>
                       <?php echo anchor('admin_kontak/hapus/'.$u->id,'Hapus'); ?>
                  </td>
                </tr>
              <?php } ?>          
                  <div class="text-center">
                    <a href="admin_kontak/tambah"><button class="btn btn-primary" type="submit">Tambah Kontak</button></a>
                </div>  

              </tbody>

            </table>
        </div>

    </div>
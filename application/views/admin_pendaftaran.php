<br><br><br>
    <div class="container">

   		<div class="col-md-12 row text-left">
          <h2 class="text-center">Pendaftaran<span class=" glyphicon glyphicon-flag"></span></h2> <br>
          <table class="table">
            <thead>
            <tr>
			  <th>NIM</th>
              <th>Nama Lengkap</th>
              <th>Telepon</th>   
              <th>Alamat</th>  
              <th>Email</th> 
              <th>Ubah</th>             
            </tr>
            </thead>
              <tbody>
              	<?php foreach($pendaftaran as $u){ ?>
                <tr>
				  <td><?php echo $u->nim ?></td>
                  <td><?php echo $u->namalengkap ?></td>
                  <td><?php echo $u->telepon ?></td>
                  <td><?php echo $u->alamat ?></td>
				  <td><?php echo $u->email ?></td>                  
                  <td>
                    <?php echo anchor('admin_pendaftaran/edit/'.$u->nim,'Edit'); ?> <br>
                       <?php echo anchor('admin_pendaftaran/hapus/'.$u->nim,'Hapus'); ?>
                  </td>
                </tr>
              <?php } ?>          

              </tbody>

            </table>
        </div>

    </div>
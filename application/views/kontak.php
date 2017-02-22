<br><br><br>
    <div class="container">

   		<div class="col-md-12 row text-left">
          <h2 class="text-center">Kontak <span class=" glyphicon glyphicon-flag"></span></h2> <br>
          <table class="table">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Telepon</th>   
              <th>Alamat</th>  
              <th>Keterangan</th>             
            </tr>
            </thead>
              <tbody>
              	<?php foreach($kontak as $u){ ?>
                <tr>
                  <td><?php echo $u->nama ?></td>
                  <td><?php echo $u->telp ?></td>
                  <td><?php echo $u->alamat ?></td>
                  <td><?php echo $u->ket ?></td>
                  <td></td>
                </tr>
              	<?php } ?>

              </tbody>

            </table>
        </div>

    </div>
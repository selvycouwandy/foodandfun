<br><br><br>
    <div class="container">

      <div class="col-md-12 row text-left">
          <h2 class="text-center">Anggota <span class=" glyphicon glyphicon-flag"></span></h2> <br>
          <table class="table">
            <thead>
            <tr>
              <th>Nim</th>
              <th>Nama Lengkap</th> 
              <th>Alamat</th>  
              <th>No. Telp</th>  
              <th>Email</th>           
            </tr>
            </thead>
              <tbody>
                <?php foreach($pendaftaran as $u){ ?>
                <tr>
                  <td><?php echo $u->nim ?></td>
                  <td><?php echo $u->namalengkap?></td>
                  <td><?php echo $u->alamat ?></td>
                  <td><?php echo $u->telepon ?></td>
                  <td><?php echo $u->email ?></td>

                  <td></td>
                </tr>
                <?php } ?>

              </tbody>

            </table>
        </div>

    </div>
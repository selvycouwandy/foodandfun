
<!-- Header -->
<section id="services">
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9"> 
          <p class="pull-right visible-xs">
          <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Kegiatan</button>
          </p>
          
          <div class="jumbotron">
            <h1><span class=" glyphicon glyphicon-ice-lolly"></span>food & fun<span class=" glyphicon glyphicon-ice-lolly-tasted"></h1>
          </div>
           
        </div>
        <a name='about'></a>
          <div class="row">
            <div class="col-md-4">
              <h2>Tentang UKM <span class=" glyphicon glyphicon-hand-left"></span></h2><br>
              <p>UKM ini diberi nama "food & fun". Disini kita dapat bertukar pendapat dan berbagi pengalaman mengenai masakan yang pernah dibuat. Untuk saat ini anggota ukm berjumlah 42 orang.</p>
              <br>
            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-md-4">
              <h2>Visi dan Misi <span class=" glyphicon glyphicon-flag"></span></h2> <br> 
              <p>Visi UKM : dengan adanya ukm ini mahasiswa bisa menjadi lebih berpengalaman dalam mengolah masakan.</p>
              <p>Misi UKM : menyelenggarakan kegiatan masak memasak antar mahasiwa dan saling mencicipi resep yang telah dimasak satu sama lain.</p>
              <br>
            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-md-4">
                <?php foreach($struktur as $u){ ?>
                <form action="<?php echo base_url(). 'admin_home/update_s'; ?>" method="post">
                <h2>Organisasi dan Pengurus <span class=" glyphicon glyphicon-user"></span></h2><br>
                <p>Ketua UKM: 
                <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="ketua" class="form-control" value="<?php echo $u->ketua ?>">
                </p>
                <p>Sekretaris UKM: 
                                        <input type="text" name="sekretaris" class="form-control" value="<?php echo $u->sekretaris ?>">
                </p>
                <p>Pembimbing UKM:  
                                        <input type="text" name="pembimbing" class="form-control" value="<?php echo $u->pembimbing ?>">
                </p>

                <div class="col-lg-3 col-lg-offset-4">
                  <button type="submit" class="btn btn-primary" value="Simpan">Ubah</button>
                </div>
                <br>
                <br>
                <a name='form'></a>
              <?php } ?>
              </form>
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-md-12 row text-left">
          <h2>Kegiatan <span class=" glyphicon glyphicon-flag"></span></h2> <br>
          <table class="table">
            <thead>
            <tr>
              <th>Tanggal</th>
              <th>Acara</th>  
              <th>Edit</th>             
            </tr>
            </thead>
              <tbody>
              <?php foreach($kegiatan as $u){ ?>
                <tr>
                  <td><?php echo $u->tanggal ?></td>
                  <td><?php echo $u->kegiatan ?></td>
                  <td>
                    <?php echo anchor('admin_home/edit/'.$u->id,'Edit'); ?>
                       <?php echo anchor('admin_home/hapus/'.$u->id,'Hapus'); ?>
                  </td>
                </tr>
              <?php } ?>          
                  <div class="text-center">
                    <a href="admin_home/tambah"><button class="btn btn-primary">tambah</button></a> 
                </div>  
              </tbody>
          </table>
        </div>

      </div><!--/.sidebar-offcanvas-->
    </div><!--/row-->
  </div><!--/.container-->

   
<footer>
  <hr>
  <div class= "col-lg-8">
    <h1> Contact Us</h1>
    <p> <a href="http://www.kharisma.ac.id/" target="_blank">STMIK KHARISMA</a>
    <a href="https://www.facebook.com/stmikkharismamks" target="_blank">Facebook</a> Fan Page STMIK KHARISMA</p>
  </div>
    <p>&copy; 2016 Company, Inc.</p>
</footer>

    


     



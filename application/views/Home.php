
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
              <h2>Organisasi dan Pengurus <span class=" glyphicon glyphicon-user"></span></h2><br>
              <?php foreach($struktur as $u){ ?>
                    <p>Ketua UKM:
                    <?php echo $u->ketua ?></p>

                    <p>Sekretaris UKM:
                    <?php echo $u->sekretaris ?></p>

                    <p>Pembimbing UKM:
                    <?php echo $u->pembimbing ?></p>
              <?php } ?>
              <br>
              <a name='form'></a>
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
            </tr>
            </thead>
              <tbody>
              <?php foreach($kegiatan as $u){ ?>
                <tr>
                  <td><?php echo $u->tanggal ?></td>
                  <td><?php echo $u->kegiatan ?></td>
                </tr>
              <?php } ?>
                            
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

    


     



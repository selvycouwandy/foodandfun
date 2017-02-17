<title>
  <?php echo $title;?>
</title>


    <!-- Carousel
    ================================================== -->
    <div class="col-sm-10 col-sm-offset-6 col-md-10 col-md-offset-1 main">
    <section class="pengurus">
          <h1 class="page-header">JADWAL KEGIATAN UKM</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
              <thead><!-- SOMETHING? --></thead>
              <tbody><!-- START TABLE BODY -->
                <tr>
                  <th><b>Tanggal</b></th>
                  <th><b>Jadwal Kegiatan</b></th>
                  <th><b>Lokasi</b></th>
                </tr>
              <tr>
                <?php foreach($kegiatan as $kegiatan){

                ?>
                </tr>
              <tr>
               <td><?php echo $kegiatan->tanggal;?></td>
                <td><?php echo $kegiatan->jadwal;?></td>
                <td><?php echo $kegiatan->lokasi;?></td>
             </tr>
            </form>   <!-- END FORM -->
           </tbody>   <!-- END TABLE BODY -->
          <?php }?>   <!-- END OF PHP -->
        </table>      <!-- END TABLE -->
        <hr>
     </div>


</section>


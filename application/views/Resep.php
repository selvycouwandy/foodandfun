<!--<br><br><br>-->
    <div class="container">
<!--
   		<div class="col-md-12 row text-left">
          <h2 class="text-center">Daftar resep <span class=" glyphicon glyphicon-flag"></span></h2> <br>
          <table class="table">
            <thead>
            <tr>
              <th>Nama masakan</th>
              <th>Link resep</th>              
            </tr>
            </thead>
              <tbody>
              	<?php foreach($resep as $u){ ?>
                <tr>
                  <td><?php echo $u->nama ?></td>
                  <td><a href="<?php echo $u->link ?>" target="_blank"><?php echo $u->link ?></td>
                  <td></td>
                </tr>
              	<?php } ?>

              </tbody>

            </table>
        </div>

    </div>
-->

<section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="form-signin-heading">Resep Makanan</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
            
		
	    <?php foreach ($resep as $resep_item): ?>
			
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="
					<?php echo $resep_item->link;?>
					" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="
			<?php echo base_url('assets/img/uploadresep/'.$resep_item->path_upload_img);?>
			" class="img-responsive img-rounded" alt="" >
                    </a>
		    
		    <?php  if (check_ip($resep_item->id,get_real_ip()) == 0) { ?>
		    <a href="javascript:void();" class="like" id="<?php echo $resep_item->id; ?>">Like <span>
		    <?php echo likes($resep_item->id); ?>
		    </span></a>
		    <?php } else { ?>
		    <a href="javascript:void();" class="liked">Liked <span>
		    <?php echo likes($resep_item->id); ?>
		    </span></a>
		    <?php } ?>
			<?php echo $resep_item->nama; ?>

		                        
                    
                                       
		    <!--<a class="btn btn-default btn-lg" target="_blank" title="Like On Facebook" href="#">
			<i class="fa fa-thumbs-o-up fa-lg fb"></i>
		    </a>-->
		</div>
			
	      <?php endforeach; ?>	
	      </div>
			
	</div>
</section>

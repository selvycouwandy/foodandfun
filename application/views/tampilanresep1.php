<section id="portfolio">
        <div class="container">
        <?php foreach ($resep1 as $resep1_item): ?>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="form-signin-heading"><?php echo $resep1_item->nama;?></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>

            <div class="row">
            	<div class="col-lg-4 col-lg-offset-4 col-xs-10 col-xs-offset-1 text-center">
            	<img src="<?php echo base_url('assets/img/uploadresep/').$resep1_item->fileToUpload; ?>
			" class="img-responsive img-rounded" alt="" >
            	</div>
            </div>

			<div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="form-signin-heading">Alat dan Bahan</h3>
                    <textarea id="tampilanresep" style="background: linear-gradient(to right,#818181,#ac8274,#988274);" rows="10" cols="100" wrap="hard" readonly><?php echo $resep1_item->alat_bahan;?>						                    	
                    </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="form-signin-heading">Cara Membuat</h3>
                    <textarea id="tampilanresep" style="background: linear-gradient(to right,#818181,#ac8274,#988274);" rows="10" cols="100" wrap="hard" readonly><?php echo $resep1_item->cara_membuat;?>             	
                    </textarea>
                </div>
            </div>

            <div class="row">        
                <div class="col-lg-3 col-lg-offset-4">
                <a href='<?php echo base_url('resep1');?>'>
                    <button  class="btn btn-primary btn-lg" style="margin-top:20px;">Back</button></a>
                </div>
	    </div>	              
<?php endforeach; ?>	



            </div>
            </section>
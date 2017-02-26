<div class="container">
<section id="services">
    <center>
        <h1>Tambah Resep </h1>
        
    </center>
    <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3" style="background-color:brown; margin-bottom:20px;">
       <font class="text-center" color="red" > <?php if (!empty($error)) echo $error; ?> </font>
       </div>
    <br><br>
<!--    <form action="-->
    <?php // echo base_url().'admin_resep/tambah_aksi'; ?>
<!--    " method="post" enctype="multipart/form-data">-->
	<?php echo form_open_multipart('Admin_resep1/upload_n_tmbhaksi');?>
	
        <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">
            <div class="bs-example">
            <fieldset>
            <div class="row" style="margin-bottom:20px;">
                <div class="form-group" >
                    <label class="col-lg-2 control-label">Nama Resep</label>
                    <div class="col-lg-10">
                        <input required="required" type="text" name="nama" class="form-control" placeholder="Nama Resep">
                    </div>
                </div>    
	    </div>

	    <div class="row">
                <div class="form-group" style="margin-bottom:20px;">
                    <label class="col-lg-2 control-label">Alat dan Bahan</label>
                    <div class="col-lg-8">
                        <textarea required="required" class="form-control" type="text" name="alat_bahan" rows="3" id="textArea" placeholder="Alat dan Bahan"></textarea>
                    </div>
                </div>
	    </div>
        <br>
        <div class="row">
                <div class="form-group" style="margin-bottom:20px;">
                    <label class="col-lg-2 control-label">Cara Membuat</label>
                    <div class="col-lg-10">
                        <textarea required="required" class="form-control" type="text" name="cara_membuat" rows="3" id="textArea" placeholder="Cara Membuat"></textarea>
                    </div>
                </div>
        </div>

            <div class="row">                    
                <div class="form-group col-lg-12">	
		    <label for="image-upload" id="image-label" style="margin-top:20px;">Choose File</label>
		    <input type="file" name="fileToUpload" id="image-upload" onchange="
			document.getElementById('blah').src = window.URL.createObjectURL(this.files[0]);
			document.getElementById('blah').style.visibility = 'visible';
		    " required="required"/>
	        </div>	
	    </div>	
	    <div class="row">        
                <div class="col-lg-3 col-lg-offset-4">
                    <button type="submit" class="btn btn-primary btn-lg" value="Tambah" style="margin-top:20px;">Tambah</button>
                </div>
	    </div>	                
            </fieldset>
            </div>
        </div>
    </form>
            <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">
	<img id="blah" class="img-responsive" alt="your image" width="100%" height="100%" style="margin-top:10px; max-width='1000'; max-height='500'; visibility: hidden;"/>
	</div>
		
    <br>
</section>
</div>
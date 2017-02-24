
    <!-- Header -->                    

    <div class="container">

      <div class="col-md-6 col-md-push-3">

        <form class="form-signin" action="<?=base_url()?>prosespendaftaran" method="post">
        <br><br><br>
          <h2 class="form-signin-heading">Formulir pendaftaran</h2>
          <br>
          <br>

        <h4>Nama lengkap :</h4>
        <label for="inputNama" class="sr-only">Nama Lengkap</label>
          <input type="text" id="inputNama" class="form-control" placeholder="Nama Lengkap" name="namalengkap" required autofocus>
          <br>

        <h4>Nim :</h4>
        <label for="inputNim" class="sr-only">Nim</label>
        <input type="text" class="form-control" placeholder="Nim" name="nim" id="nim" required>
    <p id="warning_nim"> </p>
        <br>
        
        <h4>Alamat :</h4>
        <label for="inputAlamat" class="sr-only">Alamat</label>
          <input type="text" id="inputPassword" class="form-control" placeholder="Alamat" name="alamat" required>
          <br>

        <h4>No. Telepon / HP :</h4>
        <label for="inputNotlp" class="sr-only">No. Telepon</label>
          <input type="text" id="inputPassword" class="form-control" placeholder="No. Telepon" name="telepon" required>
          <br>

        <h4>Email :</h4>
        <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required >
          <br>

          <button id="btn_submit_pendaftaran" class="btn btn-lg btn-primary" type="submit" >Daftar  <span class=" glyphicon glyphicon-ok-circle"></span></button>

      </form>
      </div>
    </div> <!-- /container -->
    <br><br>
  
<footer>
  <hr>
  <div class= "col-lg-8">
    <h1> Contact Us</h1>
    <p> <a href="http://www.kharisma.ac.id/" target="_blank">STMIK KHARISMA</a>
    <a href="https://www.facebook.com/stmikkharismamks" target="_blank">Facebook</a> Fan Page STMIK KHARISMA</p>
  </div>
    <p>&copy; 2016 Company, Inc.</p>
</footer>



 

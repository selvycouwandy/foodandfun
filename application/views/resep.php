<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../ny.jpg">

    <title>Formulir Resep Masakan</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" type="text/css" href="assets/css/resep.css">
  </head>

  <body>

    <div class="container">
	
      <form class="form-signin">
        <h2 class="form-signin-heading">Formulir Resep Masakan</h2>
		<br>
		<br>
		<h4>Nama Lengkap : </h4>
        <label for="inputNama" class="sr-only">Nama lengkap</label>
        <input type="nama" id="inputnama" class="form-control" placeholder="Nama Lengkap" required autofocus>
        <br>


		<h4>Nama Masakan : </h4>
		<label for="inputNama" class="sr-only">Umur</label>
        <input type="nama_masakan" id="inputnama" class="form-control" placeholder="Nama masakan" required autofocus>
		<br>



		<h4> Jenis Masakan</h4>
			<input type="radio" name="jenis_masakan" value="sarapan" checked /> Sarapan
			<input type="radio" name="jenis_masakan" value="masakan" /> Masakan
      <input type="radio" name="jenis_masakan" value="makanan_penutup" /> Makanan Penutup
      <input type="radio" name="jenis_masakan" value="Cake" checked /> Cake
      
			<br>
			<br>

		
       <h4>Alat dan Bahan : </h4>
		<label for="alatbahan" class="sr-only">Alat dan Bahan </label>
        <input type="alatbahan" id="inputbahan" class="form-control" placeholder="alat dan bahan" required>
			<br>
		

   <h4>Cara membuat : </h4>
    <label for="alatbahan" class="sr-only">Cara membuat </label>
        <input type="alatcara" id="inputcara" class="form-control" placeholder="cara pembuatan" required>


			<br>		
        <button class="btn btn-lg btn-primary btn-block" type="submit"><span class=" glyphicon glyphicon-floppy-disk"></span></button> 
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

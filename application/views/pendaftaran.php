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

    <title>Formulir Pendaftaran</title>

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
	<link rel="stylesheet" type="text/css" href="assets/css/pendaftaran.css">
  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Formulir pendaftaran</h2>
		<br>
		<br>



		<h4>Nama lengkap :</h4>
		<label for="inputNama" class="sr-only">Nama Lengkap</label>
        <input type="nama" id="inputNama" class="form-control" placeholder="Nama Lengkap" required>
        <br>

		<h4>Tanggal lahir :</h4>
		<label for="inputTanggallahir" class="sr-only">Tanggal Lahir</label>
        <input type="Tanggallahir" id="inputPassword" class="form-control" placeholder="Tanggal lahir" required>
        <br>
		<h4>Alamat:</h4>
		<label for="inputAlamat" class="sr-only">Alamat</label>
        <input type="alamat" id="inputPassword" class="form-control" placeholder="Alamat" required>
        <br>
		<h4>No. Telepon / HP :</h4>
		<label for="inputNotlp" class="sr-only">No. Telepon</label>
        <input type="notlp" id="inputPassword" class="form-control" placeholder="No. Telepon" required>
      <br>
    <h4>Email :</h4>
    <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar  <span class=" glyphicon glyphicon-ok-circle"></span></button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

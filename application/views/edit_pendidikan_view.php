<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Coneyko Company</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-default bg-default mb-4">
    <a class="navbar-brand" href="#">Coneyko Company</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          
        </li>
      </ul>
      
    </div>
  </nav>
	

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php echo form_open('PendidikanDat/update/'.$idPegawai."/".$idPendidikan); ?>
	<legend>Edit Data Pegawai</legend>
	<?php echo validation_errors(); ?>
	<div class="form-group">
    <input type="hidden" name="idPendidikan" value="<?php echo $pendidikan[0]->idPendidikan ?>">
    <input type="hidden" name="fk_pegawai" value="<?php echo $pendidikan[0]->fk_pegawai ?>">
		<label for="">Nama Sekolah</label>
		<input type="text" class="form-control" name="namaSekolah" id="namaSekolah" value="<?php echo $pendidikan[0]->namaSekolah ?>" placeholder="Input field">
	</div>
		<div class="form-group">
		<label for="">Tahun Lulus</label>
		<input type="number" min="1900" max="2099" step="1" value="2018" class="form-control" name="tahunLulus" id="tahunLulus" value="<?php echo $pendidikan[0]->tahunLulus ?>" placeholder="Input field">
	</div>
	
	<button type="submit" class="btn btn-primary">Edit</button>
	<?php echo form_close(); ?>
</div>



  <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/fileinput.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Gestion de Becas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Registro de becas</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">
    <form (submit)="addStudent(nom, ape, email, edad, tel, dir)">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="nombres">Nombres</label>
                <input type="text" #nom class="form-control" id="nombres" placeholder="Nombres" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="apellidos">Apellidos</label>
                <input type="text" #ape class="form-control" id="apellidos" placeholder="Apellidos" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="emails">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    </div>
                    <input type="email" #email class="form-control" id="emails" placeholder="Email" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="edad">Edad</label>
                <input type="text" #edad class="form-control" id="edad" placeholder="Edad" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="tel">Telefono</label>
                <input type="text" #tel class="form-control" id="tel" placeholder="Telefono" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="dir">Direccion</label>
                <input type="text" #dir class="form-control" id="dir" placeholder="Direccion" required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
              Acepta registrar su informacion ?
            </label>
            </div>
        </div>
        <button class="btn btn-primary">Agregar Registro</button>
    </form>
<br>
<input id="archivos" name="imagenes[]" type="file" multiple=true class="file-loading">
	</body>
	<?php 	
	$directory = "img/";      
	$images = glob($directory . "*.*");
	?>
	
	<script>
	$("#archivos").fileinput({
	uploadUrl: "upload.php", 
    uploadAsync: false,
    minFileCount: 1,
    maxFileCount: 20,
	showUpload: false, 
	showRemove: false,
	initialPreview: [
	<?php foreach($images as $image){?>
		"<img src='<?php echo $image; ?>' height='120px' class='file-preview-image'>",
	<?php } ?>],
    initialPreviewConfig: [<?php foreach($images as $image){ $infoImagenes=explode("/",$image);?>
	{caption: "<?php echo $infoImagenes[1];?>",  height: "120px", url: "borrar.php", key:"<?php echo $infoImagenes[1];?>"},
	<?php } ?>]
	}).on("filebatchselected", function(event, files) {
	
	$("#archivos").fileinput("upload");
	
	});
	
  </script>
  
<br>
<footer class="footer bg-dark rounded-top text-center">
        <div class="container py-2">

            <p class="text-white my-2">
               Brayan Diaz
            </p>
        </div>
    </footer>
</body>
</html>
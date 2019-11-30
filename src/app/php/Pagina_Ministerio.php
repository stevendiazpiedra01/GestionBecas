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
<?php
require("create/insert.php");
?>
<body style="background: #101BC5;">
<body>
    <?php
        $dbh = new PDO("mysql:host=localhost;dbname=gestiondebecas","root","");
        if(isset($_POST['btn'])){
            $nombre = $_FILES['miarchivo']['name'];
            $tipo = $_FILES['miarchivo']['type'];
            $data = file_get_contents($_FILES['miarchivo']['tmp_name']);
            $stmt = $dbh->prepare("INSERT INTO files VALUES ('',?,?,? )");
            $stmt->bindParam(1,$nombre);
            $stmt->bindParam(2,$tipo);
            $stmt->bindParam(3,$data);
            $stmt->execute();
            
        }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gestion de Becas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
       <a class="nav-link" href="Registro.php"> Registrarse <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="Acceder.php"> Acceder <span class="sr-only">(current)</span></a>
      </li>



      <li class="nav-item active">
        <a class="nav-link" href="usuarios_Mockup.php">Registro de Solicitud<span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item active">
        <a class="nav-link" href="Pagina_Ministerio.php"> Pagina Ministerio<span class="sr-only">(current)</span></a>
      </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <form class="form-inline my-2 my-lg-0" >
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

<?php
    $formatos   = array('.jpg', '.png', '.gif');
    $directorio1 = 'DocumentosFPI';
    $directorio2 = 'DocumentosFPU'; 
    if (isset($_POST['boton'])){
        $nombreArchivo    = $_FILES['archivo']['name'];
        $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];

        $ext              = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
        
        
    }
?>

<html>
<head>
 
 <img src="https://pbs.twimg.com/profile_images/983692473577955328/LLouHt4I_400x400.jpg"  align="center"   width="453"
     height="200">
 <img src="https://centro-de-salud-de-timbio-ese.micolombiadigital.gov.co/sites/centro-de-salud-de-timbio-ese/content/files/000023/1138_ministerio-de-salud-y-proteccion-social_1024x600.png"  align="right"    width="750"
     height="200">
 <img src="http://web.mintransporte.gov.co/images/logo-grande.png"  align="left"   width="700"
     height="200">

    <meta charset="utf-8">
</head>
<body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                Proyectos del ministerio vigentes para becas FPI
            </div>
            <div class="card-block">
                <div class="row">
                <?php
                    if ($dir = opendir($directorio1)){
                        while ($archivo = readdir($dir)) {
                            if ($archivo != '.' && $archivo != '..'){
                                
                                echo '<div class="col-sm-3 col-xs-12">';
                                    echo "Archivo: <strong>$archivo</strong><br />";
                                    
                                    echo '<Documentos src="'.$directorio1.'/'.$archivo.'"/>';
                                   

                                echo '</div>';
                            }
                        }
                    }
                ?>
                </div>
            </div>
        </div>
<br>
<br>
<br>
<br>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                Proyectos del ministerio vigentes para becas FPU
            </div>
            <div class="card-block">
                <div class="row">
                <?php
                    if ($dir = opendir($directorio2)){
                        while ($archivo = readdir($dir)) {
                            if ($archivo != '.' && $archivo != '..'){
                                
                                echo '<div class="col-sm-3 col-xs-12">';
                                    echo "Archivo: <strong>$archivo</strong><br />";
                                    echo '<Documentos src="'.$directorio2.'/'.$archivo.'"/>';
                                    echo "   ";
                                    echo "   ";
                                echo '</div>';
                            }
                        }
                    }
                ?>
                </div>
            </div>
        </div>



</body>
</html>
<img src="http://internetizando.com/wp-content/uploads/2018/01/logo-ministerio-de-educacion.png"  height="320"   align="center" >
        <br>
        
        <footer class="footer bg-dark rounded-top text-center">
            <div class="container py-2">

                <p class="text-white my-2">
                    Ingenieria de Sistemas
                </p>
            </div>
        </footer>
</body>

</html>
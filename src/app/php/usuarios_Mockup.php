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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.php">Gestion de Becas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <li class="nav-item">
                    <a class="nav-link" href="Html/index.html">Login</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Becas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Becas FPI</a>
                        <a class="dropdown-item" href="#">Becas FPI</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Proponer Proyecto</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Registrar Ministerio</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" >
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
<br>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="nombres">Nombres</label>
                    <input type="text" #nom class="form-control" id="nombres" name="nombres" placeholder="Nombres"
                        required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" #ape class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos"
                        required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="identificacion">No. identificacion</label>
                    <input type="text" #ape class="form-control" id="identificacion" name="identificacion"
                        placeholder="No. Identificacion" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="direccion">Direccion</label>
                    <input type="text" #ape class="form-control" id="direccion" name="direccion" placeholder="Direccion"
                        required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="emails">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        </div>
                        <input type="email" #email class="form-control" id="emails" name="emails" placeholder="Email"
                            aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="titulacion">Titulacion</label>
                    <input type="text" #ape class="form-control" id="titulacion" name="titulacion"
                        placeholder="Titulacion" required>
                </div>
            </div>
            <div class="form-row">

                <div class="col-md-4 mb-3">
                    <label for="fec_titulacion">Fecha de Titulacion</label>
                    <input type="date" #edad class="form-control" id="fec_titulacion" name="fec_titulacion"
                        placeholder="Fecha de Titulacion" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="nota_final">Nota Final</label>
                    <input type="text" #tel class="form-control" id="nota_final" name="nota_final"
                        placeholder="Nota Final" required>
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
            <input type="file" name="miarchivo" />
            <button name="btn">Subir</button>
            <p></p>
            <ol>
                <?php
        $stat = $dbh->prepare("SELECT * from files");
        $stat->execute();
        while($row = $stat->fetch()){
            echo "<li><a target= '_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a><li>";
        }
    ?>
            </ol>
            <br>
            <input class="btn btn-primary" type='submit' name='insert' id='insert' value='Insertar'>
        </form>
        <br>

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
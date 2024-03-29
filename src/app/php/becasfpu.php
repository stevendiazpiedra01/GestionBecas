<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <title>Becas Fpu</title>
</head>

<body>
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
                        <a class="dropdown-item" href="becasfpu.php">Becas FPU</a>
                        <a class="dropdown-item" href="#">Becas FPI</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Proponer Proyecto</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Registrar Ministerio</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <form class="text-center border border-light p-5" action="#!">

        <p class="h4 mb-4">Agregar Beca FPU</p>

        <div class="form-row mb-4">
            <div class="col">
                <input type="text" id="nomBeca" name="nomBeca" class="form-control" placeholder="Nombre Beca">
            </div>
            <div class="col">
                <select class="form-control">
                    <option>Cupos Disponibles ?</option>
                    <option>3</option>
                    <option>7</option>
                    <option>15</option>
                    <option>20</option>
                </select>
            </div>
        </div>
        <div class="form-row mb-5">
            <div class="col">
                <input type="text" id="nomBeca" name="nomBeca" class="form-control"
                    placeholder="Area/Facultad De la Beca">
            </div>
        </div>

        <div class="form-row mb-5">
        <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                Por Ejemplo (Matematicas, Quimica, Informatica, Electronica ...)
            </small>
            
        </div>
            

            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" type="submit">Agregar Becas FPU</button>




    </form>


    <footer class="footer bg-dark rounded-top text-center">
        <div class="container py-2">

            <p class="text-white my-2">
                Ingenieria De Software
            </p>
        </div>
    </footer>
</body>

</html>
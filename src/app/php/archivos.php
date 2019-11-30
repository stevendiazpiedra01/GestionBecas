<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
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

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="miarchivo" />
        <button name="btn">Subir</button>
</form>
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
</body>
</html>
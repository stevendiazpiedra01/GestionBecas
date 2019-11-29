<?php
include("Create/conexion.php");
$registros=$conexion_db->query("SELECT * FROM usuarios")->fetchAll(PDO::FETCH_OBJ);
if(isset($_POST["insert"])){
  
  $nombres=$_POST["nombres"];
  $apellidos=$_POST["apellidos"];
  $noIdentificacion=$_POST["identificacion"];
  $direccion = $_POST["direccion"];
  $email = $_POST["emails"];
  $titulacion=$_POST["titulacion"];  
  $fec_titulacion=$_POST["fec_titulacion"];
  $notas=$_POST["nota_final"];

  $SQL="INSERT INTO usuarios (nombres,apellidos, no_identificacion, direccion, email, titulacion, fecha_titulo, nota_final) VALUES (:nom,:ape, :noId, :dir, :ema, :titu, :fec_tit, :nota)";
  $Resultado=$conexion_db->prepare($SQL);
  $Resultado->execute(array(":nom"=>$nombres,":ape"=>$apellidos,":noId"=>$noIdentificacion,":dir"=>$direccion, ":ema"=>$email, ":titu"=>$titulacion,":fec_tit"=>$fec_titulacion, ":nota"=>$notas));
  header("Location: usuarios_Mockup.php");

  
}
?>

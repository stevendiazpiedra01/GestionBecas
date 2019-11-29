<?php
include("Create/conexion.php");
$registros=$conexion_db->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ);
if(isset($_POST["insert"])){
  $email = $_POST["email"];
  $nombres=$_POST["nombres"];
  $apellidos=$_POST["apellidos"];
  $institucion=$_POST["institucion"];  
  $departa=$_POST["depart"];
  $ciudad=$_POST["ciudad"];
  $paiss=$_POST["pais"];
  $cargoo=$_POST["cargo"];

  $SQL="INSERT INTO USUARIOS_PLATAFORMA (EMAIL,FIRSTNAME, LASTNAME, INSTITUTION, DEPARTMENT, CITY, COUNTRY, PROFILE_FIELD_CARGO) VALUES (:ema,:fname, :lname, :inst, :depa, :cit, :cont, :charge)";
  $Resultado=$conexion_db->prepare($SQL);
  $Resultado->execute(array(":ema"=>$email,":fname"=>$nombres,":lname"=>$apellidos,":inst"=>$institucion, ":depa"=>$departa, ":cit"=>$ciudad,":cont"=>$paiss, ":charge"=>$cargoo));
  header("Location: index.php");

  
}
?>

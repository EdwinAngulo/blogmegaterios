<?php 
require_once('conexion.php');
$email=$_POST['email'];
$pass=$_POST['pass'];


 $sql="SELECT * FROM autores WHERE correo_aut = :email AND contra_aut =:pass";

 $resultado=$conexion->prepare($sql);
 $resultado->execute(array(":email"=>$email,":pass"=>$pass));


?>
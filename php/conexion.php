 <?php 

try {

$conexion= new PDO('mysql:host=localhost; dbname=blog','root','');
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$conexion->exec("SET CHARACTER SET utf8");

	
} catch (Exception $e) {
  
  die('Error: '.$e->GetMessage());
  echo "<br>";
  echo "Linea del error: ". $e->getLine();
	
} 


 ?>
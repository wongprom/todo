
<!--denna är ej klar!!!!-->
<?php
require 'partials/database_pdo.php';
$statement = $pdo->prepare("SELECT * FROM todo WHERE completed = 0 ORDER BY id DESC");

$statement->execute();
 
$data = $statement->fetchAll(PDO::FETCH_ASSOC);


$statement2 = $pdo->prepare("SELECT * FROM todo WHERE completed = 1");

$statement2->execute();
 
$completed = $statement2->fetchAll(PDO::FETCH_ASSOC);


//foreach($data as $dat){
	
	//echo $dat['createdBy'] . " ";
	//echo $dat['title'] . "<br/>";
	
//}

?>

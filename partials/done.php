<?php
require 'database_pdo.php';

if (isset($_POST['done'])){
$statement = $pdo->prepare(
"UPDATE todo
SET completed = 1
WHERE id = :id;");
	
$statement->execute(array(
':id' => $_POST['done'] 
)
);
header('Location:../index.php');
}
?>
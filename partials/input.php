<?php

require ('database_pdo.php');

if (isset($_POST['createdBy']) && isset($_POST['todo'])){
	
$statment = $pdo->prepare("INSERT INTO todo (createdBy, title) VALUES (:createdBy, :todo)");
$added = $statment->execute(array(
':createdBy' => $_POST['createdBy'], 
':todo' => $_POST['todo']
)
);	
}
header('Location:../index.php?result=$added');
?>



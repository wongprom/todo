<?php
require 'database_pdo.php';

if (isset($_POST['delete'])){
$statement = $pdo->prepare("DELETE FROM todo WHERE id = :id");
$statement->execute(array(
':id' => $_POST['delete'] ));
header('Location:../index.php');
}

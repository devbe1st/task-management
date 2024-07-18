<?php 
include './includes/model.php';
$table = $_GET["table"] ?? "";
$id = $_GET["id"] ?? "";
if(deleteQuery($table, $id)){
    header("Location: ./show-" . $table . ".php" );
}
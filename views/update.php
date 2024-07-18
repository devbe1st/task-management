<?php 
include './includes/model.php';
$table = $_GET["table"] ?? "";
$column = $_GET["column"] ?? "";
$value = $_GET["value"] ?? "";
$id = $_GET["id"] ?? "";
if(update($table, $column, $value, $id)){
    header("Location: ./show-" . $table . ".php" );
}
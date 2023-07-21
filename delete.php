<?php
include_once("connect.php");
$id=$_GET["val"];
$collxn->deleteOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
header("Location:select.php");
?>
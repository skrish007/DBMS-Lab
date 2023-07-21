<?php
require '../../vendor/autoload.php';

$con= new MongoDB\Client("mongodb://localhost:27017");

$db=$con->admin;

//$collxn=$db->createCollection("new");

$collxn=$db->profile;

echo "SUCCESS";
?>
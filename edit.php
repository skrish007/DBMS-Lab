<?php
include "connect.php";

$id = $_GET["val"];
$objectId = new MongoDB\BSON\ObjectID($id);
$item = $collxn->findOne(['_id' => $objectId]);

if (isset($_POST['submit'])) 
{
    $brand = $_POST['brand'];
    $model = $_POST['model'];
	$year = $_POST['year'];
	$fuel = $_POST['fuel'];
	$type = $_POST['type'];


	$updateData = ['$set' => ['brand' => $brand, 'model' => $model,'year' =>$year, 'fuel' =>$fuel,'type' =>$type ]];
							 
	$myid = ['_id' => $objectId];
	
	$result = $collxn->updateOne($myid, $updateData);
	header("Location: select.php");
	
}


?>
<html>
<head>
    
</head>
 

<body>
<center>
    <h1>Indian Garage </h1>
    <form method="POST" action="#">
        <label for="brand">Make:</label>
        <input type="text" value="<?php echo $item["brand"]; ?>" name="brand" id="brand" required><br><br>

        <label for="model">Model:</label>
        <input type="model"  value="<?php echo $item["model"]; ?>" name="model" id="model" required><br><br>
		
		<label for="name">Year:</label>
        <input type="text"  value="<?php echo $item["year"]; ?>" name="year" id="year" required><br><br>
		
		<label for="name">Fuel:</label>
        <input type="text"  value="<?php echo $item["fuel"]; ?>" name="fuel" id="fuel" required><br><br>
		
		<label for="name">Colour:</label>
        <input type="text"  value="<?php echo $item["clr"]; ?>" name="clr" id="clr" required><br><br>
		

		<input type="submit" name="submit" value="Submit">
    </form>
	<a href="select.php">Go Back</a>
	</center>
</body>
</html>

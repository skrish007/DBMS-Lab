<html>
<h1> Insert Table </h1>
<?php
include_once("connect.php");
if(isset($_POST["submit"]))
{
$brand =$_POST['brand'];
$model =$_POST['model'];
$year =$_POST['year'];
$fuel =$_POST['fuel'];
$clr =$_POST['clr'];

	$value=array('brand'=>$brand,'model'=>$model,'year'=>$year,'fuel'=>$fuel,'clr'=>$clr );
	$collxn->insertOne($value);
	
	echo "Data added";
	//header("Location:select.php");
	
}

?>
<a href= "reg.php" > Go Back </a>
<a href= "select.php" > View </a>

</html>
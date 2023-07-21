<?php
include_once('connect.php');
$result=$collxn->find();
?>

<html>
<head>
<style>
a,#z {
font-family: Courier;
border-collapse: collapse;
margin-left:auto;
margin-right:auto;
width:500;
height:500;
}
#z td, #z th {
border: 5px;
padding: 8px;
text-align:center;
}
#z tr:nth-child(odd){background-color:lightGray;}
h1 {
padding-top: 12px;
padding-bottom: 12px;
text-align:center;
width:38%;
margin-left:auto;
margin-right:auto;

background-color:skyblue;
color:darkSlateBlue;
font-family: Courier;
font-size: 24;
}
</style>
</head>
<table border=10 id ="z">
<br> <br> <br>
<h1> INDIAN GARAGE </h1>
<tr>
<th> Make </th>
<th> Model </th>
<th> Year </th>
<th> Fuel </th>
<th> Colour </th>

<th> Delete </th>
<th> Edit </th></tr>
<?php
foreach($result as $res)
{
	?>
<tr>	<td> <?php echo $res['brand']; ?> </td>
		<td> <?php echo $res['model']; ?> </td>
			<td> <?php echo $res['year']; ?> </td> 	
			<td> <?php echo $res['fuel']; ?> </td> 

			<td> <?php echo $res['clr']; ?> </td> 

			<td> <a href="<?php echo "delete.php?val=$res[_id]";?>"
			onClick="return confirm('Confirm Deletion?')">Delete</a>
			
			<td> <a href="<?php echo "edit.php?val=$res[_id]";?>"
			onClick="return confirm('Confirm Updation?')">Edit</a>
			</tr>
			
			<?php
}
?>
</table>
<a href= "reg.php" > Go Back </a>

</html>

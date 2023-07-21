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
<form method="POST" action='insert.php'>
<h1> INDIAN GARAGE </h1>
<table border=10 id="z">
<tr><td>
<input type="text"  name="brand" placeholder="Enter Make" required> </td></tr>
<tr><td>

<input type="text" name="model" placeholder="Enter model" required></td></tr>
<tr><td>

<input type="text" name="year" placeholder="Enter year" required></td></tr>
<tr><td>

<input type="text"  name="fuel" placeholder="Enter Fuel" required></td></tr>
<tr><td>

<input type="variant" name="year" placeholder="Enter Variant" required></td></tr>
<tr><td>


<input type="text" name="clr" placeholder="Enter Colour" required></td></tr>
<tr><td>

<input  value="Add" name="submit"  type="submit">
<input  value="Clear" name="reset"  type="reset"></td></tr>
</table>

<a href= "select.php" > View </a>

</form>
</html>
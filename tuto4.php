<!DOCTYPE html>

<?php
$int = 12;
$fl= 12.4;
$str= "Is it the same?";
$sales= 190000;
$rent=25000;
$salary=37500;
$supplies=410;
$total=$rent+$salary+$supplies;		//Addition
$operating_income=$sales-$total;		//Subtraction
$net_income=$operating_income*0.60;	//Multiplication

?>

<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>

<h2>Question 1</h2>

<table style="width:100%">
  <tr>
    <th>Integer</th>
    <th>Float</th> 
    <th><?php echo $str ?></th>
  </tr>
  <tr>
    <td><?php echo $int ?></td>
    <td><?php echo $fl ?></td>
    <td><?php

		if ($int==$fl) {
		  echo "TRUE";
		}
		
		else{
			echo "FALSE";
		}
		?>
	</td>
  </tr>
</table>

<hr>

<h2>Question 2</h2>
<h2><center>Book Store Operating Costs</center></h2>
	<h5>Sales: $
		<?php
			echo $sales;
		?>
	</h5>
	<h5>Expenses:	</h5>
	<h5>Rent: $
		<?php
			echo $rent;
		?>
	</h5>
	<h5>Salary: $
		<?php
			echo $salary;
		?>
	</h5>
	<h5>Supplies: $
		<?php
			echo $supplies;
		?>
	</h5>
	<h5>Total: $
		<?php
			echo $total;
		?>
	</h5>
	<h5>Operating Income: $
		<?php
			echo $operating_income;
		?>
	</h5>
	<h5>Income after taxes: $
		<?php
			echo $net_income;
		?>
	</h5>

<h2>Question 3</h2>

	<form action="Namepage.php" method="post">
	  <label for="fname">Name:</label><br>
	  <input type="text" id="name" name="name"><br>
	  <input type="submit" value="Submit">
	</form>


</body>
</html>
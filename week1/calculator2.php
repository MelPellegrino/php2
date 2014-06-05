<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Calculator 2</title>
</head>


<body>

Calculator with operator choice: <br/>
<br/>

	<form action="calculatorOperator-handler.php" method="POST">

		First Number <input name="firstNumber" type="text" /> <br/>
		Second <input name="secondNumber" type="text" /> <br/>

		Operator <select name="operator">
			<option value="add">Add</option>
			<option value="sub">Substract</option>
			<option value="multi">Multiply</option>
			<option value="div">Divide</option>
		</select>

		<input type="submit" value="Calculate" />
		
	</form>

</body>
</html>

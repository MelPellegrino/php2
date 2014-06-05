<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
</head>


<body>

<?php  

$n1 = $_POST['firstNumber'];
$n2 = $_POST['secondNumber'];
$operator = $_POST['operator'];


if ($operator=='add') {

	$result = $n1 + $n2; }

else if ($operator=='sub') {

	$result = $n1 - $n2;
}

else if ($operator=='multi') {

	$result = $n1 * $n2; }

else {

	$result = $n1 / $n2; }

//echo "answer is ". $result;
printf("answer is  %.2f",$result);

?>


</body>
</html>
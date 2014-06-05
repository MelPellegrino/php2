<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
</head>


<body>

<?php  

$zone = $_POST['zone'];


if ($zone=='z1') {

	$price = 2.75; }

else if ($zone=='z2') {

	$price = 3.50;
}

else {

	$price = 5; }



echo "You need to pay $". sprintf("%.2f",$price);


?>



</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
</head>


<body>

<?php  

$n1 = $_POST['first_number'];
$n2 = $_POST['second_number'];

$sum = $n1 + $n2;
$sub = $n1 - $n2;
$multi = $n1 * $n2;
$div = $n1 / $n2;


echo "result of addition is ".$sum."<br/>";
echo "or <br/>";
echo $n1."+".$n2."=".$sum;

echo "result of substraction is ".$sub."<br/>";
echo "or <br/>";
echo $n1."-".$n2."=".$sub;

echo "result of multiplication is ".$multi."<br/>";
echo "or <br/>";
echo $n1."x".$n2."=".$multi;

echo "result of division is ".$div."<br/>";
echo "or <br/>";
echo $n1."/".$n2."=".$div;

?>


</body>
</html>
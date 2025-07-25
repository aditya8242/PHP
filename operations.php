<?php
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$op = $_GET["op"];

function mod($n1, $n2)
{
	if ($n2 != 0) {
		return $n1 % $n2;
	} else {
		return "Error: Cannot divide by zero.";
	}
}

function power($n1, $n2)
{
	$n3 = $n1 ** $n2;
	return $n3;
}

function sum($n1)
{
	$n3 = 0;
	for ($i = 1; $i <= $n1; $i++) {
		$n3 += $i;
	}
	return $n3;
}

function fact($n2)
{
	$n3 = 1;
	for ($i = 1; $i <= $n2; $i++) {
		$n3 *= $i;
	}
	return $n3;
}

switch ($op) {
	case "mod":
		$result = mod($n1, $n2);
		echo "Mod of $n1 and $n2 is $result<br>";
		break;

	case "power":
		$result = power($n1, $n2);
		echo "$n1 raised to $n2 is $result<br>";
		break;

	case "sum":
		$result = sum($n1);
		echo "Sum of first $n1 numbers is $result<br>";
		break;

	case "fact":
		$result = fact($n2);
		echo "Factorial of $n2 is $result<br>";
		break;

	default:
		echo "Invalid operation selected.<br>";
}
?>


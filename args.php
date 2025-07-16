<?php
echo "Passing 3 arg. to xconcat<br>";
echo "Result is ...";
xconcat("How","are","you");
function xconcat()
{
	$ans = "";
	$arg = func_get_args();
	for($i = 0; $i < func_num_args(); $i++)
	{
		$ans .= $arg[$i]."";
	}
	echo $ans;
}
?>

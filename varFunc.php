<?php
$varfun='fun1';
$varfun();
$varfun='fun2';
$varfun();
$varfun='fun3';
$varfun();
function fun1()
{
	echo "<br>Function one";
}
function fun2()
{
	echo "<br>Function two";
}
function fun3()
{
	echo "<br>Function three";
}
?>

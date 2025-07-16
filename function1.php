<?php 
function len($str)
{
	$length=strlen($str);
	return $length;
} 
 
function vcount($str) 
{ 
	$cnt=0; 
	for($i=0;$i<strlen($str);$i++) 
	{
		if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u'||$str[$i]=='A'||$str[$i]=='E'||$str[$i]=='I'||$str[$i]=='O'||$str[$i]=='U') 
		$cnt++; 
	}
	return $cnt; 
}
 
function strtitle($str) 
{  //it converts the first character of each word to uppercase in a string.
	$s2=ucwords($str); 
	return $s2; 
} 

function strlower($str) 
{ 
	$s1=strtolower($str); 
	return $s1;
}

function strpad($str,$st) 
{ 
	$s1=str_pad($str,10,$st,STR_PAD_BOTH); 
	return $s1; 
} 

function strtrim($str) 
{ 
	$s1=trim($str); 
	return $s1; 
} 

function srev($str) 
{ 
	$s1=strrev($str); 
	return $s1; 
} 

?>

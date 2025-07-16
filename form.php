<html> 
<head> 
 <title>String operations</title> 
</head> 
<body> 
 <form action=" " method="POST"> 
Enter A String<br> 
 <input type="text" name="str"><br><br> 

 Select An Operation<br> 
 <input type="radio" name="op" value="len">Length Of The String<br><br> 
 <input type="radio" name="op" value="vcount">Count The Total Number OF Vowels In The String<br><br> 
 <input type="radio" name="op" value="strlwr">Convert The String Into Lowercase And Titlecase<br><br> 
 <input type="radio" name="op" value="strpad">Pad The String With Separator On Both The Sides Select A Seperator:<select name="st"> 
 <option value="#">#</option><br> 
 <option value="%">%</option><br> 
 <option value="@">@</option><br> 
<option value="!">!</option> <br>
<option value="|">|</option> <br>
<option value=" "> </option> <br>
 </select> <br><br> 
 <input type="radio" name="op" value="strtrim">Remove The Leading Whitespaces From The String<br><br> 
 <input type="radio" name="op" value="srev">Reverse Of The String<br><br> 
 <input type="submit" value="Submit"> 
 </form> 
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
 
 $str=$_POST['str']; 
  $op=$_POST['op']; 
$st=$_POST['st'];

include 'function1.php';

    echo "<h3>Result:</h3>";

    switch($op) 
 { 
 case "len": $result=len($str); 
             printf("Length of the string is: %d",$result); 
             break; 
 case "vcount": $result=vcount($str); 
                printf("Number of vowels in the string is: %d",$result); 
                break; 
 case "strlwr": $result1=strlower($str);
                printf("The string in lowercase is: %s<br>",$result1); 
                $result=strtitle($str); 
                printf("The string in titlecase is: %s",$result); 
                break; 
 case "strpad": $result=strpad($str,$st); 
                printf("The padded string is: %s",$result); 
                break; 
 case "strtrim": $result=strtrim($str); 
                 printf("The string after removal of whitespaces is: %s",$result); 
                 break; 
 case "srev": $result=srev($str); 
              printf("The reverse string is: %s",$result); 
              break; 
 } 
}
?>
</body> 
</html> 

<?php
function makecoffee($type = "acidophilus", $flavor) //defaults should be on right side of any non default
{
	return "Making a bowl of $type $flavor<br>";
}
echo makecoffee("raspberry");
?>

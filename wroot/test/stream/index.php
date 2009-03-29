<?php
header("content-type: text/plain");

for($x = 0; $x < 20; $x++)
{
	sleep(rand(0,1)); // Simulate Long Process
	print "Sending: $x\n";
	flush(); ob_flush();
}
print("Mail Sent");
?>

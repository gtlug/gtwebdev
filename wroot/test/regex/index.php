<?php header("content-type: text/plain");
$subject = "Hello my name is dan, and I like to eat don.";
$regex = "/^<ul[^>]*>/";
$replace = "$1puppies$3";
$result = preg_replace($regex, $replace, $subject);
//preg_match_all($regex, $subject, $result );

print "\$regex = " . addslashes($regex) . "\n";

print_r( $result);
?>
<?php
print("hoeveel vrienden zal ik vragen om hun droom?");
$hoeveel = readline(":");


if (is_numeric($hoeveel)) { 
 } 
 else { 
print_r("is geen getal");
 exit(); 
}
$dromen=array();


 for ($i=1; $i <=$hoeveel ; $i++) { 

 	print_r("wat is je naam?");
 	$naam= readline(":");

 	print_r("wat is je droom?");
 	$droom= readline(":"); 
 	$dromen[$naam]= $droom;
 }

 
foreach ($dromen as $naam => $droom) {
	print_r("de droom van ". $naam . " is ". $droom. PHP_EOL );
} 
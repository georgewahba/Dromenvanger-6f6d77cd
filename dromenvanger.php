<?php
print("hoeveel vrienden zal ik vragen om hun droom?");
$hoeveel = readline(":");


if (is_numeric($hoeveel)) { 
 } 
 else { 
print_r("is geen getal");
 exit(); 
}
$namen=array();

 for ($i=1; $i <= $hoeveel ; $i++) { 

 	print_r("wat is je naam?");
 	$naam= readline(":");
$namen[$naam]=array();
 	print_r("hoeveel dromen wil je opgeven?");
 	$aantal=readline(":");

for ($a=1; $a <= $aantal ; $a++) { 
	
 	 print_r("wat is je droom?");
 	$droom= readline(":"); 
 	array_push( $namen[$naam],$droom  );
 }
}


 
foreach ($namen as $naam => $dromen ) {
	foreach ($dromen as $i => $droom) {
	
	print_r("de droom van ". $naam . " is ". $droom. PHP_EOL );
} }

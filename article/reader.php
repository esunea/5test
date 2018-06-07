<?php

$content = file_get_contents("article.txt");

$splittedText = str_split($content);
$lastCarBr = false;
foreach ($splittedText as $index => $car) {

	if(($car == " " || $car == "\n" || $car == "\r") && !$lastCarBr){
		echo("<br/>");
		$lastCarBr = true;
	}else{
		echo($car);
		$lastCarBr = false;
	}
}



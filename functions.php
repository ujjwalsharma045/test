<?php
echo "php strpos functions second user";
$inputString = "xyz123";
echo "</br>Wrong way</br>";
//bad code:
if(strpos($inputString, 'xyz') == false){
    echo "string does not exists";
}
else {
	echo "string exists";
}

echo "</br>Right way</br>";
//good code:
if (strpos($inputString, 'xyz') === false) {
	echo "string does not exists";	    
}
else {
	echo "string exists";
}


$anotherString = "3";
echo "</br>Wrong way</br>";
//bad code:
if($anotherString == 3){
    echo "true";
}
else {
	echo "false";
}

echo "</br>Right way</br>";
//good code:
if ($anotherString === 3) {
	echo "true";	    
	$type= 1;
}
else {
	echo "false";
	$type= 0;
}
echo "php end of program 1"
?>

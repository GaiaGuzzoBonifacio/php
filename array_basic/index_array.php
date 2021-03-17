<?php 
// index array
$colors = array('red','blue',"green");
// print_r($color);

// color.lenth
for($i=0;$i < count($colors);$i++){
    
    $color = $colors[$i];
    echo "indice $i corrisponde a $colors[$i]\n";

}

// color.push('rebeccapurple')
$colors[] = 'rebeccapurple';

$duplicateColor = []; // array();
foreach($colors as $key => $color){
    echo "la chiave $key contiene $color \n";
    $duplicateColor[$key] = $color;
}

print_r($duplicateColor);












// associative array
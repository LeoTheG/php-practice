<?php

$greeting =  htmlspecialchars($_GET['id']); 

$person = [
    'age'=>31,
    'hair'=>'brown'
];

/*
 * prints values
foreach($person as $feature){
    echo "<li>$feature</li>";    
}
 */

/*
 * prints keys and values
foreach($person as $key=>$val){
    echo "<li><strong>$key</strong> $val</li>";
}
 */

unset($person['age']);
die(var_dump($person));

require 'index.view.php';

<?php

$greeting =  htmlspecialchars($_GET['id']); 

$names = [
    'Leo',
    'Bob',
    'Mary'   
];

$counter = 0;
foreach($names as $name){
    /*
    echo $name;
    if($counter != (count($names)-1))
        echo ", ";
    $counter++;
     */
    echo "<li>$name</li>";
}

require 'index.view.php';
